<template>
    <div class="offer-interactive__pin">
        <figure class="offer-interactive__pin--img">
            <img :src="pin.img" alt="">
        </figure>
        <div class="offer-interactive__pin--inner">
            <div class="offer-interactive__pin--title">
                {{ pin.title }}
            </div>
            <div class="offer-interactive__pin--text" v-html="pin.desc">
            </div>
        </div>
        <button class="offer-interactive__pin--close" @click="closePin">
        </button>
    </div>
</template>

<script>  
export default {
    props: {
        pin: Object,
    },
    setup(props, {emit}) {
        const closePin = () => {
            emit('close-pin');
        };

        return {
            closePin,
        };
    },
};
</script>
