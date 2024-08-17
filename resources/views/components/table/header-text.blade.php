@props([
    'fill' => 'question-circle',
    'display' => 'hidden',
    'left' => false,
    'center' => false,
    'right' => false,
    'sortIcon' =>true,
])
<th scope="col" {{$attributes->class(['p-4 border-r border-neutral-300 cursor-pointer', 'text-left'=>$left,
    'text-center'=>$center,
    'text-right'=>$right,
    ])}}>

    <div class="inline-flex items-center gap-x-1">
        <span>{{$slot}}</span>
        <span>
            <button>
                @if($sortIcon)
                    <svg xmlns="http://www.w3.org/2000/svg"
                         shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                         image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                         viewBox="0 0 66.39 73"
                         class="h-4 w-auto block mt-1"
                    >
                        <path fill="currentColour" fill-rule="nonzero"
                              d="M28.29 59.64l-12.99 13c-0.28,0.25 -0.61,0.37 -0.94,0.37 -0.33,0 -0.66,-0.12 -0.94,-0.37l-13.04 -13.04c-0.37,-0.41 -0.49,-0.94 -0.28,-1.42 0.2,-0.49 0.69,-0.81 1.22,-0.81l7.82 0 0 -56.07c0,-0.73 0.57,-1.3 1.3,-1.3l7.82 0c0.73,0 1.3,0.57 1.3,1.3l0 56.06 7.82 0c0.73,0 1.3,0.57 1.3,1.3 0,0.37 -0.16,0.69 -0.41,0.98zm38.09 -28.35l-11.73 0 0 -4.32 3.05 0 -1.91 -5.86 -9.89 0 -1.92 5.86 3.05 0 0 4.32 -11.7 0 0 -4.32 2.85 0 9.37 -26.97 6.6 0 9.37 26.97 2.85 0 -0.01 4.32 0 0zm-3.62 41.72l-23.79 0 0 -3.67 15.03 -21.55c0.33,-0.49 0.66,-0.89 0.86,-1.1l0.45 -0.37 0 -0.12c-0.16,0 -0.33,0.04 -0.57,0.04 -0.33,0.08 -0.73,0.12 -1.22,0.12l-9.45 0 0 4.69 -4.89 0 0 -9.33 23.1 0 0 3.63 -15.04 21.59c-0.25,0.37 -0.57,0.73 -0.86,1.06l-0.45 0.45 0 0.08 0.57 -0.08c0.37,-0.08 0.73,-0.08 1.22,-0.08l10.1 0 0 -4.85 4.93 0 0 9.5zm-8.31 -56.38l-2.94 -8.88 -0.49 -1.91c-0.04,-0.33 -0.08,-0.57 -0.08,-0.81l-0.16 0 -0.12 0.81c-0.12,0.49 -0.16,1.1 -0.45,1.91l-2.97 8.88 7.21 0z"/>
                    </svg>
                @else
                    <svg xmlns="http://www.w3.org/2000/svg"
                         shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                         image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"
                         viewBox="0 0 105.84 116.39"
                         class="h-4 w-auto block mt-1"
                    >
                      <path fill="#BD07B1" fill-rule="nonzero"
                            d="M100.05 49.88l-37.93 0 0 -5.84 23.97 -34.36c0.52,-0.78 1.04,-1.43 1.37,-1.76l0.71 -0.58 0 -0.19c-0.26,0 -0.52,0.06 -0.91,0.06 -0.52,0.13 -1.16,0.19 -1.95,0.19l-15.06 0 0 7.47 -7.79 0 0 -14.87 36.83 0 0 5.78 -23.98 34.42c-0.39,0.58 -0.92,1.16 -1.37,1.69l-0.71 0.71 0 0.13 0.92 -0.13c0.58,-0.13 1.16,-0.13 1.95,-0.13l16.1 0 0 -7.73 7.86 0 0 15.14zm-13.25 43.12l-4.68 -14.16 -0.78 -3.05c-0.06,-0.52 -0.13,-0.91 -0.13,-1.29l-0.26 0 -0.19 1.29c-0.19,0.78 -0.26,1.76 -0.71,3.05l-4.74 14.16 11.5 0zm19.03 23.38l-18.7 0 0 -6.89 4.87 0 -3.05 -9.35 -15.77 0 -3.05 9.35 4.87 0 0 6.89 -18.64 0 0 -6.89 4.55 0 14.94 -42.99 10.52 0 14.94 42.99 4.55 0 -0.01 6.89 0 0zm-60.72 -95.08l-20.71 -20.72c-0.45,-0.39 -0.97,-0.58 -1.5,-0.58 -0.52,0 -1.05,0.19 -1.5,0.58l-20.78 20.78c-0.58,0.65 -0.78,1.5 -0.45,2.27 0.32,0.78 1.1,1.29 1.95,1.29l12.47 0 0 89.38c0,1.16 0.92,2.08 2.08,2.08l12.47 0c1.16,0 2.08,-0.91 2.08,-2.08l0 -89.37 12.47 0c1.16,0 2.08,-0.92 2.08,-2.08 0,-0.58 -0.26,-1.1 -0.65,-1.56z"/>
                    </svg>
                @endif
            </button>
        </span>
    </div>
</th>
