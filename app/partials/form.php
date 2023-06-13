<form action="#" class="form mb100" autocomplete="off" name="vacancy">
    <div class="form__rows mb20">
        <div class="form__row">
            <input type="text" placeholder="ИМЯ*" name="name" class="required lang">
            <div class="error">Введите имя на русском языке</div>
        </div>
        <div class="form__row">
            <input type="text" placeholder="ТЕЛЕФОН*" class="tel required" name="phone">
            <div class="error">Введите корректный номер телефона</div>
        </div>
        <div class="form__row">
            <input type="text" placeholder="ПОЧТА*" name="email" class="required email">
            <div class="error">Введите корректный email</div>
        </div>
        <div class="form__row">
            <input type="text" placeholder="ССЫЛКА НА РЕЗЮМЕ*" name="link" class="required url">
            <div class="error">Введите корректную ссылку</div>
        </div>
        <div class="form__row">
            <textarea name="about" id="about" placeholder="РАССКАЖИТЕ О СЕБЕ"></textarea>
        </div>
    </div>
    <div class="form__after mb52 body5">*поля обязательны для заполнения</div>
    <button class="button big" type="submit">ОТПРАВИТЬ</button>
</form>
<script src="/js/form.js"></script>