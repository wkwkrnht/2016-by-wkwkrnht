<style>
    .widget_duck_duck_go_widget input{display:inline-block;}
    .widget_duck_duck_go_widget input[type*="search"]{width:70%;margin-right:10%;}
    .widget_duck_duck_go_widget input[type*="submit"]{width:15%;border-radius:3vmin;color:#03a9f4;background-color:#fff;border:1px solid #03a9f4;}
    .widget_duck_duck_go_widget input[type*="submit"]:hover{color:#fff;background-color:#03a9f4;}
</style>
<form action="https://duckduckgo.com/" role="search">
    <input name="sites" type="hidden" value="<?php echo esc_url(substr(home_url('','http'),6));?>">
    <input name="q" type="search" required>
    <input type="submit" value="Search">
</form>
