<?php
require_once 'dbcon.php';
session_start();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>memorial books</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/books.scss">
<!--    <link rel="stylesheet" href="css/style.css">-->

    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="js/book.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout Books-bg">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li > <a href="index.php">Home</a> </li>
                                    <li> <a href="about.html">About us</a> </li>
                                    <li class="active"><a href="books.html">Our Books</a></li>
                                    <li><a href="library.html">library</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li class="mean-last"> <a href="#"><img src="images/search_icon.png" alt="#" /></a> </li>
                                    <li class="mean-last"> <a href="login.php"><img src="images/top-icon.png" alt="login.html" /></a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
<div class="about-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="abouttitle">
                    <h2>Our Books</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="main-container" class="main-container nav-effect-1">

    <div class="main clearfix">

        <!-- Header Content -->
        <header id="header" class="page-header">
            <div class="page-header-container row">

                    <!-- Search -->
                    <div class="catalog-search">
                        <input class="shuffle-search input_field " type="search" autocomplete="off" value="" maxlength="128" id="input-search" />
                        <label class="input_label" for="input-search">
                            <span class="input_label-content">Search Library</span>
                            <span class="input_label-search"></span>
                        </label>
                    </div>

                </div>
            </div>
        </header>


        <!-- Main Section -->
        <div class="page-container">

            <div class="page-title category-title">
                <!-- <h1>Book Viewer</h1> -->
            </div>

            <section id="book_list">

                <div class="toolbar row">
                    <div class="filter-options small-12 medium-9 columns">
                        <a href="#" class="filter-item active" data-group="all">All Categories</a>
                        <a href="#" class="filter-item" data-group="fantasy">Fantasy</a>
                        <a href="#" class="filter-item" data-group="sci-fi">Sci-Fi</a>
                        <a href="#" class="filter-item" data-group="classic">Classics</a>
                        <a href="#" class="filter-item" data-group="fairy">Fairy Tale</a>
                        <a href="#" class="filter-item" data-group="young">Young Adult</a>
                    </div>

                    <div class="small-12 medium-3 columns">
                        <select class="sort-options">
                            <option value="" disabled selected>Sort by</option>
                            <option value="" >Featured</option>
                            <option value="title">Alphabetical</option>
                            <option value="date-created">Published</option>
                        </select>
                    </div>
                </div>

                <div class="grid-shuffle">
                    <ul id="grid" class="row">

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic"]' data-date-created='1937' data-title='Of Mice and Men' data-color='#fcc278'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_1-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Of Mice and Men</h3>
                                <p class="author">by John Steinbeck &bull; 1937</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_1-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Of Mice and Men</h2>
                                    <p class="author">by John Steinbeck</p>
                                    <p class="published">1937</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic","young"]' data-date-created='1951' data-title='The Catcher in the Rye' data-color='#009c8b'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_2-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">The Catcher in the Rye</h3>
                                <p class="author">by J.D. Salinger &bull; 1951</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_2-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">The Catcher in the Rye</h2>
                                    <p class="author">by J.D. Salinger</p>
                                    <p class="published">1951</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic","sci-fi"]' data-date-created='1949' data-title='1984' data-color='#9c9688'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_3-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">1984</h3>
                                <p class="author">by George Orwell &bull; 1949</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_3-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">1984</h2>
                                    <p class="author">by George Orwell</p>
                                    <p class="published">1949</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic","young"]' data-date-created='1954' data-title='Lord of the Flies' data-color='#db2e0f'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_4-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Lord of the Flies</h3>
                                <p class="author">by William Golding &bull; 1954</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_4-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Lord of the Flies</h2>
                                    <p class="author">by William Golding</p>
                                    <p class="published">1954</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic"]' data-date-created='1925' data-title='The Great Gatsby' data-color='#e3b005'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_5-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">The Great Gatsby</h3>
                                <p class="author">by F. Scott Fitzgerald &bull; 1925</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_5-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">The Great Gatsby</h2>
                                    <p class="author">by F. Scott Fitzgerald</p>
                                    <p class="published">1925</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic"]' data-date-created='1851' data-title='Moby Dick' data-color='#a9afad'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_6-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Moby Dick</h3>
                                <p class="author">by Herman Melville &bull; 1851</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_6-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Moby Dick</h2>
                                    <p class="author">by Herman Melville</p>
                                    <p class="published">1851</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic","sci-fi"]' data-date-created='1962' data-title='A Clockwork Orange' data-color='#fe7b21'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_7-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">A Clockwork Orange</h3>
                                <p class="author">by Anthony Burgess &bull; 1962</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_7-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">A Clockwork Orange</h2>
                                    <p class="author">by Anthony Burgess</p>
                                    <p class="published">1962</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic","fairy"]' data-date-created='1835' data-title='The Princess and the Pea' data-color='#aea98c'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_8-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">The Princess and the Pea</h3>
                                <p class="author">by Hans Christian Andersen &bull; 1835</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_8-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">The Princess and the Pea</h2>
                                    <p class="author">by Hans Christian Andersen</p>
                                    <p class="published">1835</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic","fairy"]' data-date-created='1900' data-title='The Wonderful Wizard of Oz' data-color='#705e1e'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_9-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">The Wonderful Wizard of Oz</h3>
                                <p class="author">by L. Frank Baum &bull; 1900</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_9-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">The Wonderful Wizard of Oz</h2>
                                    <p class="author">by L. Frank Baum</p>
                                    <p class="published">1900</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic","fairy"]' data-date-created='1934' data-title='Mary Poppins' data-color='#939894'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_10-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Mary Poppins</h3>
                                <p class="author">by P.L. Travers &bull; 1934</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_10-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Mary Poppins</h2>
                                    <p class="author">by P.L. Travers</p>
                                    <p class="published">1934</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic","fairy"]' data-date-created='1740' data-title='Beauty and the Beast' data-color='#b4aa91'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_11-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Beauty and the Beast</h3>
                                <p class="author">by Gabrielle-Suzanne Barbot de Villeneuve &bull; 1740</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_11-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Beauty and the Beast</h2>
                                    <p class="author">by Gabrielle-Suzanne Barbot de Villeneuve</p>
                                    <p class="published">1740</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["classic","fairy"]' data-date-created='1812' data-title='Rapunzel' data-color='#725d64'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_12-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Rapunzel</h3>
                                <p class="author">by Friedrich Schulz &bull; 1812</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_12-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Rapunzel</h2>
                                    <p class="author">by Friedrich Schulz</p>
                                    <p class="published">1812</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["fantasy","young"]' data-date-created='1997' data-title="Harry Potter and the Sorcerer's Stone" data-color='#7a4930'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_13-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Harry Potter and the Sorcerer's Stone</h3>
                                <p class="author">by J.K. Rowling &bull; 1997</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_13-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Harry Potter and the Sorcerer's Stone</h2>
                                    <p class="author">by J.K. Rowling</p>
                                    <p class="published">1997</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["fantasy","young"]' data-date-created='1998' data-title='Harry Potter and the Chamber of Secrets' data-color='#800020'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_14-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Harry Potter and the Chamber of Secrets</h3>
                                <p class="author">by J.K. Rowling &bull; 1998</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_14-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Harry Potter and the Chamber of Secrets</h2>
                                    <p class="author">by J.K. Rowling</p>
                                    <p class="published">1998</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["fantasy","young"]' data-date-created='1999' data-title="Harry Potter and the Prisoner of Azkaban" data-color='#603060'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_15-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Harry Potter and the Prisoner of Azkaban</h3>
                                <p class="author">by J.K. Rowling &bull; 1999</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_15-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Harry Potter and the Prisoner of Azkaban</h2>
                                    <p class="author">by J.K. Rowling</p>
                                    <p class="published">1999</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["fantasy","young"]' data-date-created='2000' data-title="Harry Potter and the Goblet of Fire" data-color='#9a9c43'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_16-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Harry Potter and the Goblet of Fire</h3>
                                <p class="author">by J.K. Rowling &bull; 2000</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_16-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Harry Potter and the Goblet of Fire</h2>
                                    <p class="author">by J.K. Rowling</p>
                                    <p class="published">2000</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["fantasy","young"]' data-date-created='2003' data-title="Harry Potter and the Order of the Phoenix" data-color='#2c63a0'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_17-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Harry Potter and the Order of the Phoenix</h3>
                                <p class="author">by J.K. Rowling &bull; 2003</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_17-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Harry Potter and the Order of the Phoenix</h2>
                                    <p class="author">by J.K. Rowling</p>
                                    <p class="published">2003</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["fantasy","young"]' data-date-created='2005' data-title="Harry Potter and the Half-Blood Prince" data-color='#658539'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_18-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Harry Potter and the Half-Blood Prince</h3>
                                <p class="author">by J.K. Rowling &bull; 2005</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_18-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Harry Potter and the Half-Blood Prince</h2>
                                    <p class="author">by J.K. Rowling</p>
                                    <p class="published">2005</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="book-item small-12 medium-6 columns" data-groups='["fantasy","young"]' data-date-created='2007' data-title="Harry Potter and the Deathly Hallows" data-color='#b06010'>
                            <div class="bk-img">
                                <div class="bk-wrapper">
                                    <div class="bk-book bk-bookdefault">
                                        <div class="bk-front">
                                            <div class="bk-cover" style="background-image: url('http://interactivejoe.com/book-viewer/assets/images/bk_19-small.jpg')"></div>
                                        </div>
                                        <div class="bk-back"></div>
                                        <div class="bk-left"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-details">
                                <h3 class="book-item_title">Harry Potter and the Deathly Hallows</h3>
                                <p class="author">by J.K. Rowling &bull; 2007</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tellus nisi, eget pulvinar in, molestie et arcu.</p>
                                <a href="#" class="button ">Details</a>
                            </div>

                            <div class="overlay-details">
                                <a href="#" class="close-overlay-btn">Close</a>
                                <div class="overlay-image">
                                    <img src="http://interactivejoe.com/book-viewer/assets/images/bk_19-large.jpg" alt="Book Cover">
                                    <div class="back-color"></div>
                                </div>
                                <div class="overlay-desc activated">
                                    <h2 class="overlay_title">Harry Potter and the Deathly Hallows</h2>
                                    <p class="author">by J.K. Rowling</p>
                                    <p class="published">2007</p>
                                    <p class="synopsis">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor mauris,
                                        non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                    <a href="#" class="button preview">Preview</a>
                                </div>
                                <div class="overlay-preview">
                                    <a href="#" class="back-preview-btn">Back</a>
                                    <h4 class="preview-title">Preview</h4>
                                    <div class="preview-content">
                                        <h5>Chapter 1</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus convallis sem. Nunc sed tristique augue. Aenean at nulla vel lacus volutpat bibendum vitae ut nibh. Aliquam eu metus et purus rutrum malesuada. Aenean in auctor
                                            mauris, non vulputate libero. Nullam auctor, purus ut cursus convallis, lectus tellus dignissim lectus, id tempor ipsum leo ut nulla. Vestibulum vitae elit erat.<br>&nbsp;<br>&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

            </section>

        </div>

        <!-- Footer Content -->
        <footer id="footer" class="page-footer">
            <div class="row footer-wrapper">
                <div class="original-version small-12 columns"><a href="http://interactivejoe.com/book-viewer/" target="_blank"><em>Original Version can be found here.</em></a></div>
                <div class="copyright small-12 columns">&copy; 2016 - <a href="http://interactivejoe.com/"  target="_blank">InteractiveJoe</a></div>
            </div>
        </footer>

    </div>
    <!-- /main -->

    <div class="main-overlay">
        <div class="overlay-full"></div>
    </div>

</div>
<!-- /main-container -->
<h1>TRY THIS</h1>
<?php
$sql="select * from books";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

$temp=array();
$_SESSION['articles']=$temp;

if ($count > 0) {
while($row=mysqli_fetch_assoc($result)) {
$_SESSION['b_id']=$row['bookId'];
$_SESSION['title']=$row['title'];
$_SESSION['series']=$row['series'];
$_SESSION['author']=$row['author'];
$_SESSION['rating']=$row['rating'];
$_SESSION['desc']=$row['description'];
$_SESSION['lang']=$row['language'];
$_SESSION['isbn']=@$row['isbn'];
$_SESSION['genre']=@$row['genres'];
$_SESSION['chars']=@$row['characters'];
$_SESSION['format']=@$row['bookFormat'];
$_SESSION['edition']=@$row['edition'];
$_SESSION['pages']=@$row['pages'];
$_SESSION['publisher']=@$row['publisher'];
$_SESSION['pubdate']=@$row['publishDate'];
$_SESSION['awards']=@$row['awards'];
$_SESSION['numrating']=@$row['numRatings'];
$_SESSION['rstars']=@$row['ratingsByStars'];
$_SESSION['likerate']=@$row['likedPercent'];
$_SESSION['setting']=@$row['setting'];
$_SESSION['coverImg']=@$row['coverImg'];
$_SESSION['bbeScore']=@$row['bbeScore'];
$_SESSION['price']=@$row['price'];?>
<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="<?php echo $_SESSION['coverImg'];?>"></div>
                <div class="col-md-6 mt-1">
                    <h5><?php echo $_SESSION['title']?></h5>
                    <div class="d-flex flex-row">
                        <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span>310</span>
                    </div>
                    <div class="mt-1 mb-1 spec-1"><span>100% cotton</span><span class="dot"></span><span>Light weight</span><span class="dot"></span><span>Best finish<br></span></div>
                    <div class="mt-1 mb-1 spec-1"><span>Unique design</span><span class="dot"></span><span>For men</span><span class="dot"></span><span>Casual<br></span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$13.99</h4><span class="strike-text">$20.99</span>
                    </div>
                    <h6 class="text-success">Free shipping</h6>
                    <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button><button class="btn btn-outline-primary btn-sm mt-2" type="button">Add to wishlist</button></div>
                </div>
            </div>
            <?php }}?>
            /////////////////////////////////aaaaaaaaa//////////////////////////////////


            <!--      <div class="Books">-->
            <!--         <div class="container">-->
            <!--            <div class="row">-->
            <!--               <div class="col-md-10 offset-md-1">-->
            <!--                  <div class="titlepage">-->
            <!--                     <span>adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</span> -->
            <!--                  </div>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--            <div class="row box">-->
            <!--               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">-->
            <!--                  <div class="book-box">-->
            <!--                     <figure><img src="images/book-1.jpg" alt="img"/></figure>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">-->
            <!--                  <div class="book-box">-->
            <!--                     <figure><img src="images/book-2.jpg" alt="img"/></figure>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">-->
            <!--                  <div class="book-box">-->
            <!--                     <figure><img src="images/book-1.jpg" alt="img"/></figure>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--               <div class="col-md-6 offset-md-3">-->
            <!--                  <p>magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris</p>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--            <div class="container">-->
            <!--               <div class="row">-->
            <!--                  <div class="col-md-12">-->
            <!--                     <div class="read-more">-->
            <!--                        <a href="#">Read More</a>-->
            <!--                     </div>-->
            <!--                  </div>-->
            <!--               </div>-->
            <!--            </div>-->
            <!--         </div>-->
            <!--      </div>-->
            <!-- end Books -->
            <!-- footer -->
            <footer>
                <div class="footer">
                    <div class="container">
                        <div class="row pdn-top-30">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                                <div class="Follow">
                                    <h3>Follow Us</h3>
                                </div>
                                <ul class="location_icon">
                                    <li> <a href="#"><img src="icon/facebook.png"></a></li>
                                    <li> <a href="#"><img src="icon/Twitter.png"></a></li>
                                    <li> <a href="#"><img src="icon/linkedin.png"></a></li>
                                    <li> <a href="#"><img src="icon/instagram.png"></a></li>
                                </ul>
                            </div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                                <div class="Follow">
                                    <h3>Newsletter</h3>
                                </div>
                                <input class="Newsletter" placeholder="Enter your email" type="Enter your email">
                                <button class="Subscribe">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
                    </div>
                </div>
            </footer>
            <!-- end footer -->
            <!-- Javascript files-->
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/jquery-3.0.0.min.js"></script>
            <script src="js/plugin.js"></script>
            <!-- sidebar -->
            <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
            <script src="js/custom.js"></script>
</body>
</html>
