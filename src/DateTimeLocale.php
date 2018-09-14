<?php
class DateTimeLocale extends DateTime {
    private $locale_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    private $locale_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Décember');
    private $english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
    private $english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Décember');

    public function set_locale($locale) {
      switch($locale) {
        case "Fr":
          $this->locale_days = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
          $this->locale_months = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
          break;
        case "En":
        case "Us":
          $this->locale_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
          $this->locale_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'Décember');
          break;
        case "De":
          $this->locale_days = array('Montag', 'Montag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag', 'Sonntag');
          $this->locales_months = array('Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
          break;
        case "Es":
          $this->locale_days = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
          $this->locale_months = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
          break;
      }
    }

    public function format($format) {
        return str_replace($this->english_months, $this->locale_months, str_replace($this->english_days, $this->locale_days, parent::format($format)));
    }
}
