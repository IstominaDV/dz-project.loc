<?
require_once CLASSES. '\Validator.php';

$title = $header = "New Post";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $title = $_POST['title'];
    // $descr = $_POST['descr'];
    // $content = $_POST['content'];

    $fillable = ['title', 'descr', 'content']; //массив имен полей, которые могут заполняться
    //$errors = []; //ошибки валидации
    $data = loadRequestData($fillable);
    $rules = [
        'title' => [
            'required' => true,
            'min' => 3,
            'max' => 50
        ],
        'descr' => [
            'required' => true,
            'min' => 5,
            'max' => 50
        ],
        'content' => [
            'required' => true,
            'min' => 5
        ]
    ];
    //dd($data);

    // if(empty($data['title'])) {
    //     $errors['title'] = "Title field is required";
    // }
    // if(empty($data['descr'])) {
    //     $errors['descr'] = "Description field is required";
    // }
    // if(empty($data['content'])) {
    //     $errors['content'] = "Content field is required";
    // }

    if(empty($errors)) {
        $sql = "INSERT INTO posts (`title`, `slug`, `descr`, `content`) VALUES (?,?,?,?)";
        $data['slug'] = str_replace(" ", "-", $data['title']);
        if($db->query($sql, [$data['title'], $data['slug'], $data['descr'], $data['content']])) {
            echo "Post created";
        }
        else {
            echo "Error";
        }
    }
}

require_once VIEWS. '\create.tmpl.php';
?>