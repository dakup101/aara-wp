<div class="faq">
    <div class="faq__title">
        {{ $title }}
    </div>

    @foreach ($items as $item)
        <div class="faq__item">
            <button class="faq__question">
                {{ $item['question'] }}
            </button>

            <div class="faq__answer">
                <div class="faq__answer--inner">
                    {!! $item['answer'] !!}
                </div>
            </div>
        </div>
    @endforeach
</div>
