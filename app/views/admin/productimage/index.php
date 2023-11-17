<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Hình Ảnh</title>
    <link rel="icon" href="public/uploads/iconFwatch/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <header class="m-3">
            <div class="header-main d-flex justify-content-around align-items-center">
                <div class="head-logo">
                    <a href="<?= BASE_URL . '/product-image-index' ?>" class="text-decoration-none text-black fw-bold fs-4"><iconify-icon icon="ic:baseline-watch"></iconify-icon> <span class="">F-Watch</span></a>
                </div>
                <div class="col-md-5 mx-auto">

                </div>
            </div>
        </header>
        <!-- end header -->
        <!-- menu -- prodct -->
        <div class="box-content">
            <div class="boxmpr row gap-2 ">
                <div class="boxmenu col-3 ">
                    <div class="p-3 ">
                        <a href="<?= BASE_URL . '/brands-index' ?>" class="list-group-item list-group-item-action py-1"><iconify-icon icon="mdi:registered-trademark"></iconify-icon> Quản lý thương hiệu</a>
                        <a href="<?= BASE_URL . '/color-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="ic:baseline-color-lens"></iconify-icon> Quản lý màu sắc</a>
                        <a href="<?= BASE_URL . '/size-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="ic:baseline-format-size"></iconify-icon> Quản lý size</a>
                        <a href="<?= BASE_URL . '/products-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="ri:shopping-bag-2-fill"></iconify-icon> Quản lý sản phẩm</a>
                        <a href="<?= BASE_URL . '/variation-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="mdi:drag-variant"></iconify-icon> Quản lý biến thể </a>
                        <a href="<?= BASE_URL . '/product-image-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="material-symbols:image"></iconify-icon> Quản lý ảnh nhỏ </a>
                        <a href="<?= BASE_URL . '/banner-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="mdi:image-area"></iconify-icon> Quản lý banner </a>
                        <a href="<?= BASE_URL . '/bill-index' ?>" class="list-group-item list-group-item-action  py-1"><iconify-icon icon="material-symbols:order-approve-outline"></iconify-icon> Quản lý đơn hàng </a>
                    </div>
                </div>
                <!-- ========== -->
                <div class="box-product col bg-secondary rounded bg-opacity-10">
                    <div class="bg-white my-3 rounded">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <h5 class="fw-bold">List Product Image</h5>
                            <form class="d-flex align-items-center" method="POST" action="<?= BASE_URL . '/product-image-show' ?>" autocomplete="off">
                                <div class="col-auto">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm ảnh nhỏ theo id" name="ten-link" id="ten-link">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-success ms-2">Tìm kiếm</button>
                                </div>
                            </form>
                            <a href="<?= BASE_URL . '/product-image-create' ?> " class="btn btn-primary mb-2 px-3">Thêm Hình Ảnh</a>
                        </div>
                        <div class="p-2">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <td>#</td>
                                        <td>Hình Ảnh</td>
                                        <td>Tên Ảnh</td>
                                        <td>Chức năng</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listProductImage as $key => $item) : ?>
                                        <tr>
                                            <td><?= $item->id ?></td>

                                            <td><img src=" <?= './public/uploads/products/' . $item->link ?>" alt="" style="width: 130px; height: 80px;"></td>
                                            <!-- câu này chỉ lấy link ảnh -->

                                            <td><?= $item->products->name ?></td>
                                            <td class="d-flex p-3 mt-5">
                                                <form action="<?= BASE_URL . '/product-image-edit' ?>" class="me-2">
                                                    <input type="text" name="id" value="<?= $item->id ?>" hidden>

                                                    <button class="btn text-white bg-info"><iconify-icon icon="ph:note-pencil-bold"></iconify-icon></button>
                                                </form>
                                                <form action="<?= BASE_URL . '/product-image-destroy' ?>" class="">
                                                    <input type="text" name="id" value="<?= $item->id ?>" hidden>

                                                    <button class=" btn text-white bg-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa ảnh nhỏ không')"><iconify-icon icon="material-symbols:delete-rounded"></iconify-icon></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end menu -- prodct  -->


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>