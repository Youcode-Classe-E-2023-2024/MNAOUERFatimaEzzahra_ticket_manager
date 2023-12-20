<!doctype html>
<html lang="en">
<head>
    <?php include_once 'includes/header.php' ?>
</head>
<body class="bg-light">

<?php include_once 'includes/navbar.php' ?>

<main class="container">
    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span></div>
                        <h1 class="mb-5"><?= $result['tickets_title'] ?></h1>
                        <p><span class="firstcharacter">L</span><?= $result['tickets_desc'] ?></p>
                    </div><!-- End Single Post Content -->

                    <!-- ======= Comments ======= -->
                    <div class="comments">
                        <?php foreach ($comments as $comment) : ?>
                            <h5 class="comment-title py-4">2 Comments</h5>
                            <div class="comment d-flex mb-4">
                                <!--                            <div class="flex-shrink-0">-->
                                <!--                                <div class="avatar avatar-sm rounded-circle">-->
                                <!--                                    <img class="avatar-img" src="assets/img/person-5.jpg" alt="" class="img-fluid">-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <div class="flex-grow-1 ms-2 ms-sm-3">
                                    <!--                                <div class="comment-meta d-flex align-items-baseline">-->
                                    <!--                                    <h6 class="me-2">Jordan Singer</h6>-->
                                    <!--                                    <span class="text-muted">2d</span>-->
                                    <!--                                </div>-->

                                    <div class="comment-body">
                                        <?= $comment['text'] ?>
                                    </div>

                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div><!-- End Comments -->

                    <!-- ======= Comments Form ======= -->
                    <div class="row justify-content-center mt-5">

                        <div class="col-lg-12">
                            <h5 class="comment-title">Leave a Comment</h5>
                            <div class="row">
                                <form action="index.php?page=ticket_detail&id=<?= $_GET['id'] ?>">
                                <div class="col-12 mb-3">

                                    <label for="comment-message">Message</label>

                                    <textarea class="form-control" id="comment-message" placeholder="Enter your name"
                                              cols="30" rows="5" name="comment"></textarea>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn btn-primary" value="Post comment">
                                </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- End Comments Form -->

                </div>
                <div class="col-md-3">
                    <!-- ======= Sidebar ======= -->

                    <div class="aside-block">
                        <h3 class="aside-title">Tags</h3>
                        <ul class="aside-tags list-unstyled">
                            <?php foreach ($tags as $tag) : ?>
                                <li><a href="#"><?= $tag['tags_name'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div><!-- End Tags -->

                    <div class="aside-block">
                        <h3 class="aside-title">Assign to</h3>
                        <ul class="aside-links list-unstyled">
                            <?php foreach ($users as $user) : ?>
                                <li><a href="#"><i class="bi bi-chevron-right"></i> <?= $user['users_username'] ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div><!-- End Categories -->
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once 'includes/footer.php' ?>
</body>
</html>
