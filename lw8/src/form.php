<div class="main__signup">
    <img class="signup__image" src="..\img\Welcome.svg" alt="austronaut">
    <form action="src/UserQuestionnaire.php" method="post">
        <p class="form__headline">Записаться на курс</p>
        <input class="form__name form-cell" type="text" placeholder="Ваше имя"  name="first_name">
        <input class="form__email form-cell" type="email" placeholder="Email" name="email">
        <select class="form__activity form-cell" name="activity" id="">
            <option>Деятельность</option>
            <option value="Programmer">Программист</option>
            <option value="Designer">Дизайнер</option>
            <option value="Marketer">Маркетолог</option>
        </select>
        
        <input class="form__checkbox" type="checkbox" name="agreement">
        <label class="form__checkbox-text" for="checkbox">Согласен получать информационные материалы о старте курса</label><br>
        <input class="form__button" type="submit" value="Записаться на курс">
    </form>
</div>