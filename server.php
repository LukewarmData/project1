<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<div class="container">

<h1 class="display-4"> Super Glopal - $_Server</h1>

<table class="table table-striped">
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>

    <?php foreach($_Server as $key => $value) : ?>

    <tr>
        <td>
            <?php echo $key; ?>
        </td>
        <td>
            <?php echo $value;?>
            <h1>
                SUKA
            </h1>
        </td>
    </tr>

    <? endforeach ; ?>

</table>

</div>
    
</body>


</html>