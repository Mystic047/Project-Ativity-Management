<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Logo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* เพิ่มขนาดภาพให้มีขนาดพอดีกับ Navbar */
        .navbar-brand img {
            width: 180px; /* ปรับขนาดของรูปภาพตามความต้องการ */
            height: auto; /* รักษาอัตราส่วนของรูปภาพ */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid">
            <!-- นำรูปภาพมาใส่ใน Navbar -->
            <a class="navbar-brand" href="#">
                <img src="https://img2.pic.in.th/pic/sci-logo-1-removebg-preview.png" alt="Navbar Logo">
            </a>
            <!-- ส่วนของ Navbar ที่ถูกแบ่งเป็นสองส่วน -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center w-100">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ข่าวสาร</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            งานกิจกรรม
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">ปฏิทินกิจกรรม</a></li>
                                <li><a class="dropdown-item" href="#">สมัครกิจกรรม</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            โปรไฟล์
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">แก้ไขข้อมูล</a></li>
                                <li><a class="dropdown-item" href="#">สมัครกิจกรรม</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">ล๊อคเอ้า</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
