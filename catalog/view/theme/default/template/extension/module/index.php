<?php
/* ======================
   ФУНКЦИИ
====================== */

$configFile = __DIR__ . '/../json/config.json';
$config = file_exists($configFile) ? json_decode(file_get_contents($configFile), true) : [];

session_start();
$admin_url = 'index.php';
$loginUser  = $config['admin_user'];
$loginPass  = $config['admin_pass'];

/* ======================
   ЛОГАУТ
====================== */
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: {$admin_url}");
    exit;
}

/* ======================
   Login
====================== */
if (isset($_POST['login'])) {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    // Перевірка користувача
    if ($user === $loginUser && password_verify($pass, $loginPass)) {
        $_SESSION['logged_in'] = true;
        header("Location: {$admin_url}");
        exit;
    } 
    else {
        $error = "Неверный логин или пароль";
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="page-wrapper">

<?php if (empty($_SESSION['logged_in'])): ?>

    <h1>Вход в админку</h1>

    <?php if (!empty($error)): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <form method="post" class="form">
        <input type="text" name="username" placeholder="Логин" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <button type="submit" name="login">Войти</button>
    </form>

</div>
</body>
</html>
<?php
exit;
endif;


/* ======================
   ЧИТАЄМО CONFIG
====================== */
require_once __DIR__ . '/../functions.php';


?>

<h1>Админка лендинга</h1>


<div class="instructions">
    <h2>Инструкция для пользователя админки</h2>
    <ul>
        <li><span>[Вход]</span>: введите <span>логин</span> и <span>пароль</span> для доступа к админке.</li>
        <li><span>[Выход]</span>: нажмите <span>Выйти</span>, чтобы завершить сессию.</li>
        <li><span>[Градиенты]</span>: используйте пикеры для кнопок и текстов. Если нужен однотонный цвет, просто выберите один цвет – скрипт конвертирует его в градиент с двумя stops.</li>
        <li><span>[Сброс]</span>: нажмите кнопку <span>Сбросить</span> рядом с нужным блоком.</li>
        <li><span>[Форма]</span>: можно добавлять новые вопросы, удалять их, добавлять варианты и загружать картинки для каждого вопроса.</li>
        <li><span>[Предпросмотр]</span>: кнопки <span>Смотреть</span> открывают страницу лендинга в новом окне.</li>
        <li><span>[Сохранение]</span>: после внесения изменений нажмите <span>Сохранить</span>.</li>
    </ul>
</div>

<?php if (isset($_GET['success'])): ?>
    <p class="success">Сохранено</p>
<?php endif; ?>



<form action="<?= esc_url('/admin/save'); ?>" method="post" class="form">
    <button type="submit" name="export_zip" class="btn full">Сохранить ка ZIP</button>
</form>
<?php if(isset($_GET['add_scripts'])) : ?>
    <h2>Доп скрипты</h2>
    <a href="<?= esc_url('/admin'); ?>" class="btn full">Назад</a>
    <form action="<?= esc_url('/admin/save'); ?>" method="post" class="form">
        <input type="hidden" name="save_add_scripts" value="1">
        <label>Хедер:</label>
        <textarea rows="10" name="add_scripts_header"><?= htmlspecialchars($config['add_scripts_header'] ?? ''); ?></textarea>
        <label>Футер:</label>
        <textarea rows="10" name="add_scripts_footer"><?= htmlspecialchars($config['add_scripts_footer'] ?? ''); ?></textarea>
        <button type="submit" style="min-width: 220px;">Сохранить</button>
    </form>
<?php else: ?>
    <h2>Общие настройки</h2>
    <a href="?add_scripts" class="btn full">Доп скрипты</a>
    <form action="<?= esc_url('/admin/save'); ?>" method="post" enctype="multipart/form-data" class="form">

        <label>Путь к лендингу:</label>
        <input type="text" name="landing_path" value="<?= htmlspecialchars($GLOBALS['landing_path']); ?>">
        <label>Telegram Token:</label>
        <input type="text" name="bot_token" value="<?= htmlspecialchars($config['bot_token'] ?? '8553142457:AAHjgq1vqr0NVqjmhlgAhuAhtwB9ZhCNnBs'); ?>">
        <label>Telegram Chat ID:</label>
        <input type="text" name="chat_id" value="<?= htmlspecialchars($config['chat_id'] ?? '1494806251'); ?>">

        <label>Логин администратора:</label>
        <input type="text" name="admin_user" value="<?= htmlspecialchars($config['admin_user'] ?? 'admin'); ?>">
        <label>Пароль администратора:</label>
        <input type="password" name="admin_pass" value="<?= htmlspecialchars($config['admin_pass'] ?? 'admin'); ?>">
        <label>Градиент кнопок:</label>
        <div class="gradient-block">
            <div class="gradient-picker"></div>
            <input type="hidden" class="gradient-output" name="buttons_color" value="<?= htmlspecialchars($config['buttons_color'] ?? ''); ?>">
            <button type="button" class="gradient-reset" data-original="<?= htmlspecialchars($config['buttons_orign_color'] ?? ''); ?>">
                Сбросить
            </button>
        </div>
        <label>Градиент текстов:</label>
        <div class="gradient-block">
            <div class="gradient-picker"></div>
            <input type="hidden" class="gradient-output" name="span_gradient" value="<?= htmlspecialchars($config['span_gradient'] ?? ''); ?>">
            <button type="button" class="gradient-reset" data-original="<?= htmlspecialchars($config['span_default_gradient'] ?? ''); ?>">
                Сбросить
            </button>
        </div>
        <label>цвет текстов:</label>
        <div class="gradient-block">
            <div class="gradient-picker"></div>
            <input type="hidden" class="gradient-output" name="span_color" value="<?= htmlspecialchars($config['span_color'] ?? ''); ?>">
            <button type="button" class="gradient-reset" data-original="<?= htmlspecialchars($config['span_default_color'] ?? ''); ?>">
                Сбросить
            </button>
        </div>
        <label>цвет текста:</label>
        <div class="gradient-block">
            <div class="gradient-picker"></div>
            <input type="hidden" class="gradient-output" name="text_color" value="<?= htmlspecialchars($config['text_color'] ?? ''); ?>">
            <button type="button" class="gradient-reset" data-original="<?= htmlspecialchars($config['text_default_color'] ?? ''); ?>">
                Сбросить
            </button>
        </div>



        <label>Логотип:</label>
        <div class="image-preview" id="logo-preview">
            <?php if (!empty($config['logo_url'])): ?>
                <img src="<?= esc_url($config['logo_url']) ?>" class="preview-img" alt="Логотип">
                <input type="hidden" name="remove_logo" class="remove-image-flag" value="0">
                <button type="button" class="remove-image">Удалить</button>
            <?php else: ?>
                <input type="hidden" name="remove_logo" class="remove-image-flag" value="0">
            <?php endif; ?>
            <input type="file" id="logo-file-input" class="image-input" name="logo_file">
        </div>


        <input type="hidden" name="remove_logo" id="remove-logo-input" value="0">
        <input type="hidden" name="save_config" value="1">
        <button type="submit" style="min-width: 220px;">Сохранить</button>
    </form>

    <h2>Первый екран</h2>
    <a href="<?= esc_url('index.php'); ?>" target="_blank" class="btn full">Смотреть</a>
    <form action="<?= esc_url('/admin/save'); ?>" method="post" enctype="multipart/form-data" class="form">
        <input type="hidden" name="save_first_page" value="1">
        <label>Заголовок:</label>
        <textarea rows="2" name="first_page_title"><?= htmlspecialchars($config['pages']['first_page_title'] ?? ''); ?></textarea>
        <label>Описание:</label>
        <textarea rows="4" name="first_page_descr"><?= htmlspecialchars($config['pages']['first_page_descr'] ?? ''); ?></textarea>
        <label>Фон:</label>
        <div class="image-preview" id="fpage-background-preview">
            <?php if (!empty($config['pages']['first_page_background'])): ?>
                <img src="<?= esc_url($config['pages']['first_page_background']) ?>" class="preview-img" alt="Фон">
                <input type="hidden" name="remove_fpage_background" class="remove-image-flag" value="0">
                <button type="button" class="remove-image">Удалить</button>
            <?php else: ?>
                <input type="hidden" name="remove_fpage_background" class="remove-image-flag" value="0">
            <?php endif; ?>
            <input type="file" id="fpage-file-input" class="image-input" name="fpage_background_file">
        </div>

        <button type="submit" style="min-width: 220px;">Сохранить</button>
    </form>

    <h2>Страница благодарности</h2>
    <a href="<?= esc_url('thanks.php'); ?>" target="_blank" class="btn full">Смотреть</a>
    <form action="<?= esc_url('/admin/save'); ?>" method="post" enctype="multipart/form-data" class="form">
        <input type="hidden" name="save_thanks" value="1">
        <label>Заголовок:</label>
        <input type="text" name="success_title" value="<?= htmlspecialchars($config['pages']['success_title'] ?? ''); ?>">
        <label>Описание:</label>
        <textarea rows="3" name="success_descr"><?= htmlspecialchars($config['pages']['success_descr'] ?? ''); ?></textarea>
        <button type="submit" style="min-width: 220px;">Сохранить</button>
    </form>

    <h2>Форма</h2>
    <a href="<?= esc_url('form.php'); ?>" target="_blank" class="btn full">Смотреть</a>
    <form action="<?= esc_url('/admin/save'); ?>" method="post" enctype="multipart/form-data" class="form">
        <input type="hidden" name="save_repeater" value="1">

        <label>Заголовок:</label>
        <textarea rows="4" name="form_page_descr"><?= htmlspecialchars($config['pages']['form_page_descr'] ?? ''); ?></textarea>
        <label>Заголовок (благодарность):</label>
        <textarea rows="4" name="form_page_success"><?= htmlspecialchars($config['pages']['form_page_success'] ?? ''); ?></textarea>
        <label>Описание (благодарность):</label>
        <textarea rows="4" name="form_page_success_descr"><?= htmlspecialchars($config['pages']['form_page_success_descr'] ?? ''); ?></textarea>
        <button type="submit" style="min-width: 220px;">Сохранить</button>
        <div id="questions-wrapper">
            <?php foreach ($repeater['questions'] as $i => $q): ?>
            <div class="question-block" data-index="<?= $i ?>">
                <h3>Вопрос <?= $i+1 ?></h3>

                <button type="button" class="toggle-btn">Показать/Скрыть</button>
                <button type="button" class="remove-btn">Удалить</button>

                <div class="question-fields" style="display:none;">

                    <!-- KEY + TITLE + TYPE -->
                    <div class="group-row">
                        <input type="text" style="width:15%;" placeholder="Key" name="questions[<?= $i ?>][key]" value="<?= htmlspecialchars($q['key']) ?>">
                        <input type="text" placeholder="Title" name="questions[<?= $i ?>][title]" value="<?= htmlspecialchars($q['title']) ?>">
                        <select name="questions[<?= $i ?>][type]">
                            <option value="radio" <?= ($q['type'] === 'radio') ? 'selected' : '' ?>>Один вариант</option>
                            <option value="checkbox" <?= ($q['type'] === 'checkbox') ? 'selected' : '' ?>>Несколько вариантов</option>
                        </select>
                    </div>

                    <!-- Image preview + upload + delete -->
                    <div class="image-preview">
                        <?php if (!empty($q['image'])): ?>
                            <img src="<?= esc_url($q['image']) ?>" alt="Preview" class="preview-img">
                            <span class="caption">Размер 1920х1080</span>
                            <button type="button" class="remove-image">Удалить</button>
                        <?php endif; ?>
                        <input type="file" name="question_image[<?= $i ?>]" class="image-input">
                        <input type="hidden" name="questions[<?= $i ?>][remove_image]" class="remove-image-flag" value="0">
                    </div>


                    <!-- Variations -->
                    <label>Variations</label>
                    <div class="variations-wrapper">
                        <?php foreach ($q['variations'] as $v => $var): ?>
                            <div class="variation-block">
                                <input type="text" name="questions[<?= $i ?>][variations][<?= $v ?>]" value="<?= htmlspecialchars($var) ?>">
                                <button type="button" class="remove-variation">Удалить</button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="add-variation">Добавить вариацию</button>

                </div>
                <hr>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="buttons-wrapper" style="margin-top: 30px;">
            <button type="button" id="add-question">Добавить вопрос</button>
            <button type="submit">Сохранить</button>
        </div>
    </form>

    <script src="<?= esc_url('jquery.min.js'); ?>"></script>
    <script>
    $(function() {

        // Toggle show/hide fields
        $(document).on('click', '.toggle-btn', function() {
            $(this).siblings('.question-fields').slideToggle();
        });

        // Remove question
        $(document).on('click', '.remove-btn', function() {
            if(confirm('Удалить этот вопрос?')) {
                $(this).closest('.question-block').remove();
            }
        });

        // Add variation
        $(document).on('click', '.add-variation', function() {
            const wrapper = $(this).siblings('.variations-wrapper');
            const index = wrapper.closest('.question-block').data('index');
            const newIndex = wrapper.children().length;
            const html = `<div class="variation-block">
                <input type="text" name="questions[${index}][variations][${newIndex}]">
                <button type="button" class="remove-variation">Удалить</button>
            </div>`;
            wrapper.append(html);
        });

        // Remove variation
        $(document).on('click', '.remove-variation', function() {
            $(this).closest('.variation-block').remove();
        });

        // Add new question
        $('#add-question').on('click', function() {
            const wrapper = $('#questions-wrapper');
            const index = wrapper.children().length;

            const html = `<div class="question-block" data-index="${index}">
                <h3>Вопрос ${index+1}</h3>
                <button type="button" class="toggle-btn">Показать/Скрыть</button>
                <button type="button" class="remove-btn">Удалить</button>
                <div class="question-fields" style="display:none;">

                    <!-- KEY + TITLE + TYPE -->
                    <div class="group-row">
                        <input type="text" placeholder="Key" name="questions[${index}][key]">
                        <input type="text" placeholder="Title" name="questions[${index}][title]">
                        <select name="questions[${index}][type]">
                            <option value="radio">Radio</option>
                            <option value="checkbox">Checkbox</option>
                        </select>
                    </div>

                    <!-- Image preview + upload + remove -->
                    <div class="image-preview">
                        <input type="file" name="question_image[${index}]" class="image-input">
                        <button type="button" class="remove-image-btn" style="display:none;">Удалить картинку</button>
                    </div>

                    <!-- Variations -->
                    <label>Variations</label>
                    <div class="variations-wrapper"></div>
                    <button type="button" class="add-variation">Добавить вариацию</button>

                </div>
                <hr>
            </div>`;

            wrapper.append(html);
        });


        // Image preview
        $(document).on('change', '.image-input', function() {
            const fileInput = this;
            const preview = $(this).parent(); // замість closest()

            if(fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    let img = preview.find('img.preview-img');
                    if(img.length) {
                        img.attr('src', e.target.result); // замінюємо існуюче зображення
                    } else {
                        preview.prepend(`<img src="${e.target.result}" class="preview-img">`);
                    }
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        });

        $(document).on('click', '.remove-image', function() {
            const preview = $(this).closest('.image-preview');
            preview.find('img.preview-img').remove(); // видаляємо прев’ю
            preview.find('.remove-image-flag').val('1'); // ставимо прапорець для бекенду
            $(this).remove(); // видаляємо кнопку "Удалить"
        });


    });

    </script>
<?php endif; ?>
<div class="actions">
    <form method="post">
        <button name="logout" class="btn btn-danger">Выйти</button>
    </form>
</div>

</div>
<link rel="stylesheet" href="https://unpkg.com/grapick/dist/grapick.min.css">
<script src="https://unpkg.com/grapick/dist/grapick.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // ініціалізуємо всі пікери
    document.querySelectorAll('.gradient-block').forEach(function(block) {

        const pickerEl = block.querySelector('.gradient-picker');
        const outputEl = block.querySelector('.gradient-output');
        const resetBtn = block.querySelector('.gradient-reset');

        if (!pickerEl || !outputEl) return;

        // Створюємо Grapick
        const gp = new Grapick({
            el: pickerEl,
            direction: 'to right'
        });

        // Виставляємо збережене
        if (outputEl.value) {
            gp.setValue(outputEl.value);
        }

        // Зберігаємо зміни у hidden
        gp.on('change', function() {
            outputEl.value = gp.getValue();
        });

        // ======================
        // RESET
        // ======================
        if (resetBtn) {
            resetBtn.addEventListener('click', function () {

                // беремо оригінальний градієнт з data-original
                let original = this.dataset.original;

                if (original && original.trim() !== '') {
                    // Встановлюємо оригінальний
                    gp.setValue(original);
                    outputEl.value = original;
                } else {
                    // ПОВНИЙ RESET
                    gp.removeAll(); // прибираємо все
                    // додаємо дефолтні stops, щоб пікер не зламався
                    gp.addStop(0, 'rgba(255,255,255,0)');
                    gp.addStop(100, 'rgba(255,255,255,0)');
                    outputEl.value = '';
                }

            });
        }

    });

});

</script>

