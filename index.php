<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Books</h1>
        <hr>
        <?php 
            // include('person.php');

            include('book.php');

            $author1 = new Person('Sophie', 'Kinsella', 1969);
            $book1 = new Book("I love shopping", $author1, 2000, "Description......" );
            $author2 = new Person('J.K.', 'Rowlings', 1969, );
            $book2 = new Book("Harry Potter", $author2, 1997, "Description......" );
            $author3 = new Person('Giovanni', 'Verga', 1840);
            $book3 = new Book("I Malavoglia", $author3, 1881, "Description......");
            $author4 = new Person('Jojo', 'Moyes', 1969);
            $book4 = new Book("Me Before you", $author4, 2012, "Description......" );
            $author5 = new Person('Jane', 'Austen', 1775);
            $book5 = new Book("Orgoglio e pregiudizio", $author5, 1813, "Description......");

            $data = [$book1, $book2, $book3, $book4, $book5];

            foreach($data as $book) { ?>
                <p><b>Title:</b> <?php echo $book->get_title(); ?></p>
                <p><b>Author:</b> <?php echo $book->get_authorFullName(); ?></p>
                <p><b>Date of Birth:</b> <?php echo $book->get_authorBirthDate(); ?></p>
                <p><b>First Publication:</b> <?php echo $book->get_year() ?></p>
                <p><b>Description:</b> <?php echo $book->get_description() ?></p>
                <hr>
            <?php }

        ?>
    </body>
</html>