<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= isset($title) ? $title : 'Admin | Summit Medical Center'; ?></title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        rel="stylesheet">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>

        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fb;
        }

        .admin-wrapper {
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #0f172a;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
        }

        .main-content {
            margin-left: 250px;
            min-height: 100vh;
        }

        .sidebar-brand {
            height: 70px;
            display: flex;
            align-items: center;
            padding: 0 25px;
            color: #fff;
            font-size: 18px;
            font-weight: 700;
            text-decoration: none;
        }

        .sidebar-brand span {
            color: #38bdf8;
        }

        .sidebar-menu {
            padding: 20px 15px;
        }

        .sidebar-menu .menu-title {
            color: #64748b;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            margin: 15px 10px 8px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 14px;
            margin-bottom: 5px;
            border-radius: 8px;
            color: #cbd5e1;
            text-decoration: none;
            font-size: 14px;
            transition: .2s;
        }

        .sidebar-menu a:hover,
        .sidebar-menu a.active {
            background: #1e293b;
            color: #38bdf8;
        }

        .sidebar-menu a i {
            width: 20px;
            text-align: center;
        }

        .top-navbar {
            height: 70px;
            background: #fff;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
        }

        .page-content {
            padding: 30px;
        }

        .profile-button {
            display: flex;
            align-items: center;
            gap: 10px;
            border: none;
            background: transparent;
        }

        .profile-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #e0f2fe;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 768px) {

            .sidebar {
                width: 70px;
            }

            .sidebar-brand {
                justify-content: center;
                padding: 0;
            }

            .sidebar-brand strong,
            .sidebar-menu span,
            .menu-title {
                display: none;
            }

            .sidebar-menu a {
                justify-content: center;
            }

            .main-content {
                margin-left: 70px;
            }

            .top-navbar {
                padding: 0 15px;
            }

            .page-content {
                padding: 20px;
            }
        }

    </style>

</head>

<body>

<div class="admin-wrapper">