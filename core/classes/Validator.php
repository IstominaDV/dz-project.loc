<?
class Validator {
    private $errors = [];

    private $validatorsList = ['required', 'min', 'max'];

    private $messages = [
        'required' => 'The :fieldname: field is required.',
        'min' => 'The :fieldname: field must be a minimum of :value: characters.',
        'max' => 'The :fieldname: field must be a maximum of :value: characters.'
    ];

    //название совпадает с $validatorsList, два параметра 1: полученные данные, 2: правила валидации/референсные значения
    //возвращает true, если валидация пройдена
    private function required($value, $ruleValue) {
        return !empty($value);
    }

    private function min($value, int $ruleValue) {
        return mb_strlen($value) >= $ruleValue;
    }
}
?>