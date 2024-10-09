<template>
    <div class="offer-interactive">
        <figure class="offer-interactive__img">
            <img :src="background" alt="">
        </figure>
        <div class="offer-interactive__guide">
            <div v-for="(pin, key) in pins" class="offer-interactive__guide--item" :data-x="pin.pos_x" :data-y="pin.pos_y" :style="triggerStyle(pin), {zIndex: pin.pos_z}">
                <button class="offer-interactive__guide--trigger" :class="{'active' : pin.show}" @click="togglePin(pin)">
                    {{ key + 1 }}
                </button>
                <div class="offer-interactive__guide--pin" :style="pinStyle(pin)">
                    <OfferInteractivePin v-if="pin.show" @close-pin="togglePin(pin)" :pin="pin"></OfferInteractivePin>
                </div>
            </div>
        </div>
    </div>
</template>

<script>  
import {ref, computed} from "vue"
import OfferInteractivePin from "./OfferInteractivePin.vue";

export default {
    props: {
        pins: Array,
        background: String,
    },
    setup(props) {
        let activeZindex = ref(10);
        const pins = ref(props.pins);
        
        const triggerStyle = (pin) => {
            return {
                paddingLeft: `${pin.pos_x}%`, 
                top: `${pin.pos_y}%`,
                zIndex: pin.pos_z
            }
        }

        const togglePin = (pin) => {
            pin.show = !pin.show;

            if(pin.show) {
                activeZindex.value++;
                pin.pos_z = activeZindex.value;
            }
        }

        const closePin = () => {
            alert("bbb");

        }

        console.log(props.pins)

        const pinStyle = (pin) => {
            return {
            };
        }
    
    return {
        triggerStyle,
        pinStyle,
        togglePin,
        pins,
        activeZindex
    }
    },
    computed: {

    },

    components: {
        OfferInteractivePin
    }
};
</script>