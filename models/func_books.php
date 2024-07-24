<?php
require_once 'pdo.php';



function get_new_books($number)
{
    $sql = "SELECT books.id as id, books.title as title, books.price as price, authors.au_name as author
    FROM books 
    INNER JOIN authors 
    ON authors.id = books.au_id
    INNER JOIN book_images 
    ON book_images.book_id = books.id
    WHERE book_images.images like '%_1.jpg'
    ORDER BY books.id DESC LIMIT 0," . $number;
    return pdo_query($sql);
}

function get_books_promotional($number)
{
    $sql = "SELECT books.id as id, books.title as title, books.price as price, authors.au_name as author
    FROM books 
    INNER JOIN authors ON authors.id = books.au_id
    INNER JOIN book_images ON book_images.book_id = books.id
    WHERE books.sale_off > 0 and book_images.images like '%_1.jpg'
    ORDER BY books.id DESC LIMIT " . $number;
    return pdo_query($sql);
}

function get_most_sales($number)
{
    $sql = "SELECT books.id as id, books.title as title, books.price as price, authors.au_name as author
    FROM books 
    INNER JOIN authors ON authors.id = books.au_id
    INNER JOIN book_images ON book_images.book_id = books.id
    WHERE books.bestseller = 1 and book_images.images like '%_1.jpg'
    ORDER BY books.id DESC LIMIT " . $number;
    return pdo_query($sql);
}

function get_most_views($number)
{
    $sql = "SELECT books.id as id, books.title as title, books.price as price, authors.au_name as author
    FROM books 
    INNER JOIN authors 
    ON authors.id = books.au_id
    INNER JOIN book_images 
    ON book_images.book_id = books.id
    ORDER BY books.views DESC LIMIT" . $number;
    return pdo_query($sql);
}
function get_books_list($keyword, $categ_id, $number)
{
    $sql = "SELECT DISTINCT books.id as id, books.title as title, books.price as price, authors.au_name as author
	FROM books 
    INNER JOIN authors 
    ON authors.id = books.au_id
    INNER JOIN book_categories 
    ON book_categories.bk_id = books.id";
    if ($categ_id > 0) {
        $sql .= " AND book_categories.categ_id=" . $categ_id;
    }
    if ($keyword != "") {
        $sql .= " AND books.title like '%" . $keyword . "%'";
    }

    $sql .= " ORDER BY id ASC limit " . $number;
    return pdo_query($sql);
}
function get_product_details($id)
{
    $sql = "SELECT books.id as id ,books.title as title, books.price as price, books.views as views, books.book_description as descript, authors.au_name as author, formats.fm_name as format
    FROM books 
    INNER JOIN authors 
    ON authors.id = books.au_id
    INNER JOIN formats 
    ON formats.id = books.fm_id
    WHERE books.id = ?";
    return pdo_query_one($sql, $id);
}
function get_books_images($id){
    $sql="WITH NumberedRows AS (
        SELECT images
                ,
            ROW_NUMBER() OVER (ORDER BY images ASC) AS RowNum
        FROM book_images
            WHERE book_id = ?
    )
    SELECT 
        MAX(CASE WHEN RowNum = 1 then images END) AS cover,   
        MAX(CASE WHEN RowNum = 2 then images END) AS images2,
        MAX(CASE WHEN RowNum = 3 then images END) AS images3        
    FROM 
        NumberedRows";
    return pdo_query_one($sql, $id);
}

function get_related_product($id, $au_id, $number)
{
    $sql = "SELECT books.id as id ,books.title as title, books.price as price , authors.au_name as author
    FROM books 
    INNER JOIN authors 
    ON authors.id = books.au_id
    WHERE books.au_id=? AND books.id<>?
    ORDER BY books.id DESC LIMIT " . $number;
    return pdo_query($sql, $au_id, $id);
}
function get_au_id($id)
{
    $sql = "SELECT 	books.au_id
    FROM books
    WHERE id=?";
    return pdo_query_value($sql, $id);
}

function view_count($id){
    $sql = "UPDATE books 
    SET views= views + 1 
    WHERE id = ?";
    return pdo_execute($sql, $id);
}
// function show_books($books_list)
// {
//     $html_books_list = '';
//     foreach ($books_list as $book) {
//         extract($book);
//         $html_books_list .= '<div class="col-lg-4 col-md-6">
//                                     <div class="product__item">
//                                         <div class="product__item__pic set-bg" data-setbg="./publics/img/product/books/book_' . $id . '_1.jpg">
                                                
//                                                 <ul class="product__hover">
                                            
//                                                     <li><a href="./publics/img/product/books/book_' . $id . '_1.jpg" class="image-popup"><span
//                                                                 class="arrow_expand"></span></a></li>
//                                                     <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                    
//                                                     <li>
//                                                     <input id="quantity' . $id . '" type="hidden" name="quantity" value="1">
//                                                     <input id="price' . $id . '" type="hidden" name="price" value="' . $price . '">
//                                                     <input id="name' . $id . '" type="hidden" name="title" value="' . $title . '">
//                                                     <input id="quantity' . $id . '" type="hidden" name="quantity" value="1">
//                                                     <button id="' . $id . '" type="submit" name="add_to_cart" class="add_to_cart" value="Add to Cart"><span class="icon_bag_alt add_to_cart"></span></button></li>
//                                                     </form>
//                                                 </ul>
                                    
                                    
//                                         </div>
//                                         <div class="product__item__text">
//                                             <h5><a href="index.php?pgs=productDetail&id=' . $id . '">' . $title . '</a></h5>
//                                             <h6><a href="#">' . $author . '</a></h6>
//                                             <div class="rating">
//                                                 <i class="fa fa-star"></i>
//                                                 <i class="fa fa-star"></i>
//                                                 <i class="fa fa-star"></i>
//                                                 <i class="fa fa-star"></i>
//                                                 <i class="fa fa-star"></i>
//                                             </div>
//                                             <div class="product__price">' . $price . 'đ</div>
//                                         </div>
//                                     </div>
//                             </div>';
//     }
//     return $html_books_list;
// }

function show_books_home($books_list)
{
    $html_books_list = '';
    foreach ($books_list as $book) {
        extract($book);
        $html_books_list .= '<div class="col-lg-3 col-md-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="./publics/img/product/books/book_' . $id . '_1.jpg">                                                
                                                <ul class="product__hover">
                                            
                                                    <li><a href="./publics/img/product/books/book_' . $id . '_1.jpg" class="image-popup"><span
                                                                class="arrow_expand"></span></a></li>
                                                    <li><a href="#"><span class="icon_heart_alt"></span></a></li>
                                                    
                                                    <li>
                                                    <input id="quantity' . $id . '" type="hidden" name="quantity" value="1">
                                                    <input id="price' . $id . '" type="hidden" name="price" value="' . $price . '">
                                                    <input id="name' . $id . '" type="hidden" name="title" value="' . $title . '">
                                                    <input id="quantity' . $id . '" type="hidden" name="quantity" value="1">
                                                    <button id="' . $id . '" type="submit" name="add_to_cart" class="add_to_cart" value="Add to Cart"><span class="icon_bag_alt add_to_cart"></span></button></li>
                                                    </form>
                                                </ul>                              
                                    
                                        </div>
                                        <div class="product__item__text">
                                            <h5><a href="index.php?pgs=productDetail&id=' . $id . '">' . $title . '</a></h5>
                                            <h6><a href="#">' . $author . '</a></h6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product__price">' . $price . 'đ</div>
                                        </div>
                                    </div>
                            </div>';
    }
    return $html_books_list;
}


?>