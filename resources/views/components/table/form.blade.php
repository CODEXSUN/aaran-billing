<div x-data="{ checkAll : false }"
     class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700">

    <table {{$attributes->merge(['class' => 'w-full text-left text-sm text-neutral-600 dark:text-neutral-300'])}}>

        <thead
            class="border-b border-neutral-300 bg-neutral-100 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white text-center">
        <tr>
            @if(isset($table_header))
                {{$table_header}}
            @endif
        </tr>
        </thead>

        <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700 text-center">
        @if(isset($table_body))
            {{$table_body}}
        @endif
        </tbody>

    </table>

</div>

<div class="py-2">
    @if(isset($table_pagination))
        {{$table_pagination}}
    @endif
</div>
