<div class="contact-person">
    <figure class="contact-person__img">
        <img src="{{ $img }}" alt="{{ $name }}">
    </figure>
    <div class="contact-person__content">
        <h4 class="contact-person__name">
            {{ $name }}
        </h4>
        <div class="contact-person__pos">
            {{ $position }}
        </div>

        @if(!empty($tel))

        <a href="tel:{{ $tel_inline }}" class="contact-person__link contact-person__link--tel">
            {{ $tel }}
        </a>

        @endif 

        <a href="mailto:{{ $mail }}" class="contact-person__link contact-person__link--mail">
            {{ $mail }}
        </a>
    </div>
</div>
