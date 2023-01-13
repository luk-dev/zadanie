<?php
$form_terms = "Zapozanałem(-łam) się z <a href='#!'>Polityką prywatności</a> oraz z <a href='#!'>Zastrzeżeniami prawnymi.</a>";
$form_button = "WYŚLIJ";
?>
<form action="" class="form">
  <div class="form__wr">
    <div class="form-field">
      <input class="form-field__input" type="text" name="name" placeholder="Imię i Nazwisko">
    </div>
    <div class="form-field">
      <input class="form-field__input" type="text" name="phone" placeholder="Telefon">
    </div>
    <div class="form-field">
      <input class="form-field__input" type="email" name="email" placeholder="E-mail">
    </div>
    <div class="form-field">
      <input class="form-field__input" type="text" name="company" placeholder="Firma">
    </div>
    <div class="form-field">
      <select class="form-field__input form-field__input--select">
        <option selected disabled>Ilość pracowników</option>
        <option>>10</option>
        <option>+10</option>
        <option>+100</option>
      </select>
    </div>
    <div class="form-field">
      <select class="form-field__input form-field__input--select">
        <option selected disabled>Roczny dochów firmy</option>
        <option>>10000</option>
        <option>+100000</option>
        <option>+1000000</option>
      </select>
    </div>
  </div>
  <div class="form__message">
    <div class="form-field">
      <input class="form-field__input form-field__input--textarea" type="textarea" name="message" placeholder="Wiadomość" rows="7">
    </div>
  </div>
  <div class="form__footer">
    <div class="form-field__checkbox">
      <input type="checkbox" id="terms">
      <label for="terms"><?php echo $form_terms; ?></label>
    </div>
    <button type="submit" class="btn"><?php echo $form_button; ?></button>
  </div>
</form>