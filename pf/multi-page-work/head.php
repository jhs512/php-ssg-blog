<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>삼성중공업 - <?=$title?></title>

  <!-- 테일윈드 불러오기 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css">

  <!-- 폰트어썸 불러오기 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  <!-- 제이쿼리 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="common.css">
</head>
<body>
  <header class="top-bar con-min-width bg-gray-700 text-white">
    <div class="con flex">
      <a href="index.ssghtml.php" class="logo text-4xl py-3">
        <span>
          <i class="fas fa-lemon"></i>
        </span>
        <span class="font-bold">
          DESIGN LEMON
        </span>
      </a>

      <div class="flex-grow"></div>

      <nav class="top-bar__menu-box">
        <ul class="flex h-full">
          <li>
            <a class="h-full flex items-center px-4 hover:bg-white hover:text-gray-700" href="index.ssghtml.php">
              <span class="font-bold">HOME</span>
            </a>
          </li>
          <li>
            <a class="h-full flex items-center px-4 hover:bg-white hover:text-gray-700" href="company_info.ssghtml.php">
              <span class="font-bold">COMPANY INFO</span>
            </a>
          </li>
          <li>
            <a class="h-full flex items-center px-4 hover:bg-white hover:text-gray-700" href="vision.ssghtml.php">
              <span class="font-bold">VISION</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="title-bar con-min-width">
    <h1 class="con font-bold text-4xl">
      <?=$title?>
    </h1>
  </section>