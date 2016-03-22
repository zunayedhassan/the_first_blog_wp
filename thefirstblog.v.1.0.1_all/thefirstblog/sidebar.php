<?php

if ( is_active_sidebar( 'Sidebar Widgets' ) ) {
    ?>
        <a id="tfb-sidebar-toggle" href="#sidr" class="icon-plus3" title="Toggle Sidebar"></a>

        <!-- Sidebar -->
        <aside id="sidr">
            <div id="scrollpane">
                <div id="tfb-primary-widget-container">
                    <div class="tfb-sidebar-close"><span class="icon-ellipsis"></span></div>
                    
                    <?php dynamic_sidebar('Sidebar Widgets'); ?>
                    
                    <div class="tfb-sidebar-close"><span class="icon-ellipsis"></span></div>
                </div>
            </div>
        </aside>
    <?php
}