<footer class="footer">
            @php
              $links = getContent('policy_pages.element');
            @endphp
            <ul class="list-inline">
                <li>@lang('Copyright') &copy; {{ date('Y') }} {{ $general->sitename }}. @lang('All Rights Reserved.')</li>
                @foreach($links as $link)
                    <li><a href="{{ route('policy.pages',[slug($link->data_values->title),$link->id]) }}">{{ __($link->data_values->title) }}</a></li>
                @endforeach
            </ul>
        </footer>