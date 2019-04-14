<!DOCTYPE html>
<html>
    <head>
        <title>CodeIgniter Pagination</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h3 class="">CodeIgniter Database Pagination</h3>
            <div class="">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Contact Name</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($authors as $author): ?>
                            <tr>
                                <td><?= $author->id ?></td>
                                <td><?= $author->first_name ?></td>
                                <td><?= $author->last_name ?></td>
                                <td><?= $author->email ?></td>
                                <td><?= $author->birthdate ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
					<p><?php echo $links; ?></p>

            </div>
        </div>
    </body>
</html>