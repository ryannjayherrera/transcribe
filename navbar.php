<?php
$page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php');
?>

<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="index.php?page=dashboard">
                    <span class="icon">
                        <ion-icon name="logo-apple-ar"></ion-icon>
                    </span>
                    <span class="title">TRANSCRIBE</span>
                </a>
            </li>

            <li>
                <a href="index.php?page=dashboard">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="index.php?page=transcribe">
                    <span class="icon">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </span>
                    <span class="title">Transcribe</span>
                </a>
            </li>

            <li>
                <a href="index.php?page=history">
                    <span class="icon">
                        <ion-icon name="time-outline"></ion-icon>
                    </span>
                    <span class="title">History</span>
                </a>
            </li>

            <li>
                <a href="index.php?page=#">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Help</span>
                </a>
            </li>

            <li>
                <a href="index.php?page=settings">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Settings</span>
                </a>
            </li>

            <li>
                <a href="login.php">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
        
    </div>
</div>