<!DOCTYPE html>
<% if $HasCacheKeyContent %><% cached $CacheKeyContent %>
<!-- cached -->
<html lang="$ContentLocale">
<head>
    $ExtendedMetaTags
    <% include WebpackCSSLinks %>
</head>

<body>


    <main id="main">
        <div class="typography">
            $Layout
        </div>
    </main>

    <% include Footer %>
    <% include WebpackJSLinks %>

<% end_cached %><% else %>

<!-- uncached -->

<html lang="$ContentLocale">
<head>
    $ExtendedMetaTags
    <% include WebpackCSSLinks %>
</head>

<body>


    <main id="main">
        <div class="typography">
            $Layout
        </div>
    </main>

    <% include WebpackJSLinks %>

</body>
</html>
