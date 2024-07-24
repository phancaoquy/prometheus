<?php

if (isset($_GET['categ_id'])) {
    $id = $_GET['categ_id'];
}

// Books ----------------------
if (isset($_GET['pgs']) && isset($_GET['pgs']) == 'books') {
    if (!isset($_GET['categ_id'])) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
    FROM `books` 
    INNER JOIN book_categories ON book_categories.bk_id = books.id
    WHERE books.fm_id = 1");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil(($total_records)/2 / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }


    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 1) {

        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 1");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 2) {

        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 2");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 3) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 3");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 4) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 4");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 5) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 5");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 6) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 6");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }


    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 7) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 7");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 8) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 8");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 9) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 9");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 10) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 1 and book_categories.categ_id = 10");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_books = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_books .= "<a class='page-link' href='index.php?pgs=books&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }
}



// EBooks ----------------------
if (isset($_GET['pgs']) && isset($_GET['pgs']) == 'eBooks') {

    if (!isset($_GET['categ_id'])) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil(($total_records)/2 / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }



    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 1) {

        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 1");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 2) {

        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 2");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 3) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 3");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 4) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 4");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 5) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 5");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 6) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 6");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }


    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 7) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 7");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 8) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 8");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 9) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 9");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 10) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 2 and book_categories.categ_id = 10");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_ebooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_ebooks .= "<a class='page-link' href='index.php?pgs=eBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }
}


// AudioBooks ----------------------
if (isset($_GET['pgs']) && isset($_GET['pgs']) == 'audioBooks') {

    if (!isset($_GET['categ_id'])) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil(($total_records)/2 / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }



    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 1) {

        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 1");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 2) {

        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 2");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 3) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 3");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 4) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 4");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 5) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 5");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 6) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 6");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }


    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 7) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 7");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 8) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 8");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 9) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 9");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }

    if (isset($_GET['categ_id']) && $_GET['categ_id'] == 10) {
        $limit = 9;
        $stmt = $conn->query("SELECT COUNT(books.id)
        FROM `books` 
        INNER JOIN book_categories ON book_categories.bk_id = books.id
        WHERE books.fm_id = 3 and book_categories.categ_id = 10");
        $row_db = $stmt->fetch();
        //$row_db = $result ->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($row);
        $total_records = $row_db[0];
        $total_pages = ceil($total_records / $limit);
        $pagLink_audioBooks = "";
        for ($countpage = 1; $countpage <= $total_pages; $countpage++) {
            $pagLink_audioBooks .= "<a class='page-link' href='index.php?pgs=audioBooks&categ_id=" . $id . "&page=" . $countpage . "'>" . $countpage . "</a>";
        }
    }
}
