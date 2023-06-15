<form action="#" class="form mb100" autocomplete="off" name="vacancy">
    <div class="form__rows mb20">
        <div class="form__row">
            <input type="text" placeholder="ИМЯ*" name="name" class="required">
        </div>
        <div class="form__row">
            <input type="tel" inputmode="tel" placeholder="ТЕЛЕФОН*" name="phone" class="required">
        </div>
        <div class="form__row">
            <input type="email" inputmode="email" placeholder="ПОЧТА*" name="email" class="required">
        </div>
        <div class="form__row">
            <input type="url" inputmode="url" placeholder="ССЫЛКА НА РЕЗЮМЕ*" name="link" class="required">
        </div>
        <div class="form__row">
            <textarea name="about" id="about" placeholder="РАССКАЖИТЕ О СЕБЕ"></textarea>
        </div>
    </div>
    <div class="form__after mb52 body5">*поля обязательны для заполнения</div>
    <button class="button big" type="submit" disabled>ОТПРАВИТЬ</button>
</form>
<script src="/js/form.js"></script>