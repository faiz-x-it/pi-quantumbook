
                       <!-- Post Share Options -->
                       <div class="styled-pagination text-center">
                        
@if ($paginator->hasPages())
<ul class="clearfix">
    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><span class="fa fa-angle-left"></span></a></li>
    @foreach ($elements as $element)
       
        @if (is_string($element))
            <li class="disabled"><span>{{ $element }}</span></li>
        @endif


       
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <li class="active my-active"><a href="{{ $url }}">{{ $page }}</a></li>   
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><span class="fa fa-angle-right"></span></a></li>
    
</ul>
@endif 
                       </div>