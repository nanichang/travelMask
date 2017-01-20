<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                       Blog
                    </a>
                </li>
            </ul>
        </nav>
        <p class="copyright pull-right">
            &copy; 
            <?php 
                $copyYear = 2017; 
                $curYear = date('Y'); 
                echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?>
            <a href="http://nhubnigeria.com">nHub Nigeria.</a>
        </p>
    </div>
</footer>