<?
class Validator {
    private $errors = [];

    private $validatorsList = ['required', 'min', 'max']; //список существующих валидаторов, названия функций валидаторов

    //Шаблоны сообщений
    private $messages = [
        'required' => 'The :fieldname: field is required.',
        'min' => 'The :fieldname: field must be a minimum of :rule_value: characters.',
        'max' => 'The :fieldname: field must be a maximum of :rule_value: characters.'
    ];

    public function validate(array $data = [], array $rules = []) {
        foreach ($data as $fieldname => $value) {
            //если $fieldname есть в массиве из названий ключей $rules 
            if (in_array($fieldname, array_keys($rules))) {
                $field = [
                    'fieldname' => $fieldname,
                    'value' => $value,
                    'rules' => $rules[$fieldname]
                ];
                //валидируем
                $this->callValidator($field);
            }
        }
    }

    private function callValidator(array $field) {
        foreach ($field['rules'] as $rule => $ruleValue) {
            if(in_array($rule, $this->validatorsList)) {
                if(!call_user_func_array([$this, $rule], [$field['value'], $ruleValue])) {
                    $errMessage = str_replace(
                        [':fieldname:', ':rule_value:'],
                        [$field['fieldname'], $ruleValue],
                        $this->messages[$rule]
                    );
                    $this->addError($field['fieldname'], $errMessage);
                }
            }
        }
    }

    public function hasErrors() {
        return !empty($this->errors);
    }

    public function getErrors() {
        return $this->errors;
    }

    private function addError(string $fieldname, string $errMessage) {
        $this->errors[$fieldname][] = $errMessage;
    }



    //Список валидаторов
    //название совпадает с $validatorsList, два параметра 1: полученные данные, 2: правила валидации/референсные значения
    //возвращает true, если валидация пройдена
    //$value - полученные данные, которые надо проверить
    //$rule_value - референсные значения

    private function required($value, bool $ruleValue) { //обязательное для заполнения поля
        return !empty($value);
    }

    private function min($value, int $ruleValue) {
        return len($value) >= $ruleValue;
    }

    private function max($value, int $ruleValue) {
        return len($value) <= $ruleValue;
    }

    public function listErrors($fieldname) {
        $errors_list = '<div class="invalid-feedback d-block"><ul class="list-unstyled">';
        if(isset($this->errors[$fieldname])) {
            foreach($this->errors[$fieldname] as $errMessage) {
                $errors_list .= "<li>$errMessage</li>";
            } 
        }
        $errors_list .= '</ul></div>';
        return $errors_list;
    }
}
?>