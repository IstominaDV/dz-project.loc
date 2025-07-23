<?
function dump($data) {
    echo "<pre>";
        var_dump($data);
    echo "/<pre>";
}

function dd($data) {
    dump($data);
    die;
}

function abort($code = 404) {
    http_response_code($code);
    require_once VIEWS. "/errors/{$code}.tmpl.php";
    die;
}

function loadRequestData(array $fillable = [], string $method = 'POST') {
    $data = [];
    if($method == 'POST') {
        foreach($_POST as $field => $value) {
            if(in_array($field, $fillable)) {
                $data[$field] = trim($value);
            }
        }
    }
    return $data;
}

function old(string $field_name) {
    return isset($_POST[$field_name]) ? h($_POST[$field_name]) : '';
}

function h($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}
?>