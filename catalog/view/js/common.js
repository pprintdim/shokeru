function getURLVar(key) {
    var value = [];

    var query = String(document.location).split('?');

    if (query[1]) {
        var part = query[1].split('&');

        for (i = 0; i < part.length; i++) {
            var data = part[i].split('=');

            if (data[0] && data[1]) {
                value[data[0]] = data[1];
            }
        }

        if (value[key]) {
            return value[key];
        } else {
            return '';
        }
    }
}

function getThemeCartProductIds() {
    var cartNode = document.querySelector('#cart');
    var productIds = [];

    if (cartNode && cartNode.dataset.cartProducts) {
        try {
            productIds = JSON.parse(cartNode.dataset.cartProducts);
        } catch (e) {
            productIds = [];
        }
    }

    return productIds.map(function(productId) {
        return String(productId);
    });
}

function openThemeCart() {
    var cartPopup = document.querySelector('.busket');
    var cartOpenButton = document.querySelector('.cart-open');

    if (cartPopup) {
        cartPopup.classList.add('active');
    } else {
        window.location.href = 'index.php?route=checkout/cart';
    }

    if (cartOpenButton) {
        cartOpenButton.classList.add('opened');
    }
}

function reloadThemeCart(callback) {
    $('#cart').load('index.php?route=common/cart/info #cart > *', function(responseText) {
        var updatedCart = $('<div>').append($.parseHTML(responseText)).find('#cart');

        if (updatedCart.length && updatedCart.attr('data-cart-products') !== undefined) {
            $('#cart').attr('data-cart-products', updatedCart.attr('data-cart-products'));
        }

        syncProductCartButtons();

        if (typeof callback === 'function') {
            callback();
        }
    });
}

function setProductButtonAdded(button) {
    if (!button) {
        return;
    }

    if (!button.dataset.defaultHtml) {
        button.dataset.defaultHtml = button.innerHTML;
    }

    var label = button.querySelector('span');
    var icon = button.querySelector('svg');
    var addedText = button.dataset.addedText || 'Додано';

    if (label) {
        label.textContent = addedText;
    } else {
        button.textContent = addedText;
    }

    if (icon) {
        icon.remove();
    }

    button.classList.add('added');
}

function resetProductButtonAdded(button) {
    if (!button) {
        return;
    }

    if (button.dataset.defaultHtml) {
        button.innerHTML = button.dataset.defaultHtml;
    }

    button.classList.remove('added');
}

function addThemeProductCardToCart(button, productId, quantity) {
    if (!button || !productId) {
        return;
    }

    if (button.classList.contains('added')) {
        openThemeCart();
        return;
    }

    cart.add(productId, quantity || 1, function() {
        if (window.ShokeruGA4 && typeof window.ShokeruGA4.trackAddToCartFromElement === 'function') {
            window.ShokeruGA4.trackAddToCartFromElement(button, quantity || 1);
        }

        setProductButtonAdded(button);
        openThemeCart();
    });
}

function syncProductCartButtons() {
    var productIds = getThemeCartProductIds();

    document.querySelectorAll('[data-product-id][data-added-text]').forEach(function(button) {
        if (productIds.indexOf(String(button.dataset.productId)) !== -1) {
            setProductButtonAdded(button);
        } else {
            resetProductButtonAdded(button);
        }
    });
}

document.addEventListener('DOMContentLoaded', syncProductCartButtons);

function getThemeWishlistProductIds() {
    var body = document.body;
    var productIds = [];

    if (body && body.dataset.wishlistProducts) {
        try {
            productIds = JSON.parse(body.dataset.wishlistProducts);
        } catch (e) {
            productIds = [];
        }
    }

    return productIds.map(function(productId) {
        return String(productId);
    });
}

function setWishlistButtonActive(button) {
    if (!button) {
        return;
    }

    button.classList.add('active');
}

function resetWishlistButtonActive(button) {
    if (!button) {
        return;
    }

    button.classList.remove('active');
}

function syncWishlistButtons() {
    var productIds = getThemeWishlistProductIds();

    document.querySelectorAll('.product__item-fav[data-product-id], .prod__fav[data-product-id]').forEach(function(button) {
        if (productIds.indexOf(String(button.dataset.productId)) !== -1) {
            setWishlistButtonActive(button);
        } else {
            resetWishlistButtonActive(button);
        }
    });
}

function updateThemeWishlistState(productIds, totalCount) {
    var body = document.body;
    var normalizedIds = Array.isArray(productIds) ? productIds.map(function(productId) {
        return String(productId);
    }) : [];
    var count = typeof totalCount === 'number' ? totalCount : normalizedIds.length;
    var headerWishlistCount = document.querySelector('.header__favourite span');
    var profileWishlistCount = document.querySelector('[data-profile-btn="tracked-products"] span');

    if (body) {
        body.dataset.wishlistProducts = JSON.stringify(normalizedIds);
        body.dataset.wishlistTotal = String(count);
    }

    if (headerWishlistCount) {
        headerWishlistCount.textContent = count;
    }

    if (profileWishlistCount) {
        profileWishlistCount.textContent = count;
    }

    syncWishlistButtons();
}

function renderWishlistEmptyState() {
    var profileResult = document.querySelector('.profile-products[data-empty-text]');
    var productsBlock = profileResult ? profileResult.querySelector('.profile__products-block') : null;
    var emptyText;
    var emptyNode;

    if (!profileResult || productsBlock) {
        return;
    }

    emptyText = profileResult.dataset.emptyText || '';
    emptyNode = profileResult.querySelector('.profile__result-name');

    if (!emptyNode && emptyText) {
        emptyNode = document.createElement('p');
        emptyNode.className = 'profile__result-name';
        emptyNode.textContent = emptyText;
        profileResult.appendChild(emptyNode);
    }
}

function removeWishlistProductCard(productId) {
    var wishlistBlock = document.querySelector('.profile__products-block') || document.querySelector('.shop__results[data-wishlist-results]');

    if (!wishlistBlock) {
        return;
    }

    wishlistBlock.querySelectorAll('[data-product-id="' + productId + '"]').forEach(function(button) {
        var productCard = button.closest('.product__item');

        if (productCard && productCard.parentNode === wishlistBlock) {
            productCard.remove();
        }
    });

    if (wishlistBlock.querySelector('.product__item')) {
        return;
    }

    if (wishlistBlock.matches('.profile__products-block')) {
        wishlistBlock.remove();
        renderWishlistEmptyState();
        return;
    }

    if (wishlistBlock.matches('.shop__results[data-wishlist-results]')) {
        var emptyText = wishlistBlock.dataset.emptyText || '';
        var emptyNode = document.createElement('p');

        emptyNode.className = 'shop__empty';
        emptyNode.setAttribute('data-wishlist-empty', '');
        emptyNode.textContent = emptyText;
        wishlistBlock.replaceWith(emptyNode);
    }
}

document.addEventListener('DOMContentLoaded', syncWishlistButtons);

function formatInternationalPhone(value) {
    var clean = String(value || '')
        .replace(/[^\d+]/g, '')
        .replace(/(?!^)\+/g, '');

    if (clean.charAt(0) !== '+') {
        clean = '+' + clean.replace(/\+/g, '');
    }

    var digits = clean.replace(/\D/g, '').slice(0, 15);

    if (!digits) {
        return '';
    }

    var groups = [];
    var cursor = 0;
    var pattern = [3, 2, 3, 2, 2, 2];

    pattern.forEach(function(size) {
        if (cursor >= digits.length) {
            return;
        }

        groups.push(digits.slice(cursor, cursor + size));
        cursor += size;
    });

    if (cursor < digits.length) {
        groups.push(digits.slice(cursor));
    }

    return '+' + groups.join(' ');
}

function applyInternationalPhoneMask(input) {
    if (!input) {
        return;
    }

    input.setAttribute('inputmode', 'tel');
    input.setAttribute('autocomplete', 'tel');

    if (!input.placeholder) {
        input.placeholder = '+380 67 123 45 67';
    }

    input.value = formatInternationalPhone(input.value);
}

function bindInternationalPhoneMasks(root) {
    (root || document).querySelectorAll('input[type="tel"], input[name="telephone"], input[name="recipient_telephone"]').forEach(applyInternationalPhoneMask);
}

document.addEventListener('DOMContentLoaded', function() {
    bindInternationalPhoneMasks(document);
});

document.addEventListener('focusin', function(event) {
    if (event.target.matches('input[type="tel"], input[name="telephone"], input[name="recipient_telephone"]')) {
        applyInternationalPhoneMask(event.target);
    }
});

document.addEventListener('input', function(event) {
    if (event.target.matches('input[type="tel"], input[name="telephone"], input[name="recipient_telephone"]')) {
        event.target.value = formatInternationalPhone(event.target.value);
        event.target.setSelectionRange(event.target.value.length, event.target.value.length);
    }
});


$('#search-form').on('submit', function(e) {
    e.preventDefault(); // щоб форма не сабмітилася стандартно

    var action = $(this).attr('action'); // базовий URL
    var query = $(this).find('input[name="search"]').val().trim();

    if (!query) return; // якщо пусто, нічого не робимо

    // Створюємо URL пошуку
    var url = action + '&search=' + encodeURIComponent(query);

    // Перенаправляємо
    window.location.href = url;
});

// Cart add remove functions
var cart = {
    'add': function(product_id, quantity, callback) {
        $.ajax({
            url: 'index.php?route=checkout/cart/add',
            type: 'post',
            data: 'product_id=' + product_id + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
            dataType: 'json',
            success: function(json) {

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['success']) {
                    $('.header__cart span').text(json['total']);
                    reloadThemeCart();

                    if (typeof callback === 'function') {
                        callback(json);
                    }
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'update': function(key, quantity) {
        $.ajax({
            url: 'index.php?route=checkout/cart/edit',
            type: 'post',
            data: 'key=' + key + '&quantity=' + (typeof(quantity) != 'undefined' ? quantity : 1),
            dataType: 'json',
            success: function(json) {
                $('.header__cart span').text(json['total']);
                if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
                    location = 'index.php?route=checkout/cart';
                } 

                else {
                    reloadThemeCart();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function(key) {
        var cartItem = document.querySelector('#cart [data-cart-id="' + key + '"]');
        var ga4Item = null;

        if (window.ShokeruGA4 && cartItem && typeof window.ShokeruGA4.getItemFromNode === 'function') {
            ga4Item = window.ShokeruGA4.getItemFromNode(cartItem);
        }

        $.ajax({
            url: 'index.php?route=checkout/cart/remove',
            type: 'post',
            data: 'key=' + key,
            dataType: 'json',
            success: function(json) {
                // Need to set timeout otherwise it wont update the total
                $('.header__cart span').text(json['total']);

                if (window.ShokeruGA4 && ga4Item && typeof window.ShokeruGA4.trackRemoveFromCart === 'function') {
                    window.ShokeruGA4.trackRemoveFromCart(ga4Item);
                }

                if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
                    location = 'index.php?route=checkout/cart';
                } else {
                    reloadThemeCart();
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

var voucher = {
    'add': function() {

    },
    'remove': function(key) {
        $.ajax({
            url: 'index.php?route=checkout/cart/remove',
            type: 'post',
            data: 'key=' + key,
            dataType: 'json',
            beforeSend: function() {
                $('#cart > button').button('loading');
            },
            complete: function() {
                $('#cart > button').button('reset');
            },
            success: function(json) {


                if (getURLVar('route') == 'checkout/cart' || getURLVar('route') == 'checkout/checkout') {
                    location = 'index.php?route=checkout/cart';
                } else {
                    $('#cart > ul').load('index.php?route=common/cart/info ul li');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    }
}

var wishlist = {
    'request': function(route, data, callback) {
        $.ajax({
            url: 'index.php?route=' + route,
            type: 'post',
            data: data,
            dataType: 'json',
            success: function(json) {
                if (json['redirect']) {
                    location = json['redirect'];
                    return;
                }

                if (Array.isArray(json['product_ids'])) {
                    updateThemeWishlistState(json['product_ids'], parseInt(json['total_count'], 10) || json['product_ids'].length);
                }

                if (typeof callback === 'function') {
                    callback(json);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'add': function(product_id, callback) {
        this.request('account/wishlist/add', 'product_id=' + product_id, callback);
    },
    'remove': function(product_id, callback) {
        this.request('account/wishlist/remove', 'product_id=' + product_id, callback);
    },
    'clear': function(callback) {
        this.request('account/wishlist/clear', '', callback);
    },
    'toggle': function(product_id, button, options) {
        var settings = options || {};
        var isActive = button && button.classList.contains('active');
        var onComplete = function(json) {
            var productId = String(product_id);

            if (json['active']) {
                setWishlistButtonActive(button);
            } else {
                resetWishlistButtonActive(button);
            }

            if (settings.removeCard || (!json['active'] && (getURLVar('route') === 'account/wishlist' || document.querySelector('.shop__results[data-wishlist-results]')))) {
                removeWishlistProductCard(productId);
            }
        };

        if (isActive) {
            this.remove(product_id, onComplete);
        } else {
            this.add(product_id, onComplete);
        }
    }
}

document.addEventListener('click', function(event) {
    var productCartButton = event.target.closest('.product__item-btn[data-product-id][data-added-text]');
    var wishlistButton = event.target.closest('.product__item-fav[data-product-id], .prod__fav[data-product-id]');
    var wishlistDeleteButton = event.target.closest('.product__item-delete[data-product-id]');
    var wishlistResetButton = event.target.closest('.profile__products-reset');

    if (productCartButton) {
        event.preventDefault();
        addThemeProductCardToCart(productCartButton, productCartButton.dataset.productId, productCartButton.dataset.quantity);
        return;
    }

    if (wishlistButton) {
        event.preventDefault();
        wishlist.toggle(wishlistButton.dataset.productId, wishlistButton);
        return;
    }

    if (wishlistDeleteButton) {
        event.preventDefault();
        wishlist.remove(wishlistDeleteButton.dataset.productId, function() {
            removeWishlistProductCard(String(wishlistDeleteButton.dataset.productId));
        });
        return;
    }

    if (wishlistResetButton) {
        event.preventDefault();
        wishlist.clear(function() {
            var wishlistBlock = document.querySelector('.profile__products-block');

            if (wishlistBlock) {
                wishlistBlock.remove();
            }

            renderWishlistEmptyState();
        });
    }
});

var compare = {
    'add': function(product_id) {
        $.ajax({
            url: 'index.php?route=product/compare/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            success: function(json) {
                $('.alert-dismissible').remove();

                if (json['success']) {

                    $('#compare-total').html(json['total']);

                    $('html, body').animate({ scrollTop: 0 }, 'slow');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    },
    'remove': function() {

    }
}
