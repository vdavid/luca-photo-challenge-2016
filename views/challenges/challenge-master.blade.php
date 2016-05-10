<?php
/**
 * @var int $weekIndex
 */

use Carbon\Carbon;

$formattedEndDate = utf8_encode((new Carbon('2015-12-21'))->addWeeks($weekIndex * 2)->addDays(-1)->formatLocalized('%Y. %B %e.'));
?>
<article>
    <header>
        <h2>{{ $weekIndex }}. feladat: @yield('title')</h2>
    </header>
    <div class="body">
        @yield('body')
    </div>
    <footer>
        Határidő: {{ $formattedEndDate }}
    </footer>
</article>
