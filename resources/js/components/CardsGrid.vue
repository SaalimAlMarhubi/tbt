<template>
    <div class="container" id="app">
        <div v-for="card in cards" class="card">
            <!-- @if(isset($card['image'])) -->
            <img
                v-if="card.image"
                class="image"
                src="{{$card['image']}}"
                alt="card image"
            />
            <!-- @else -->
            <img
                class="image"
                src="https://placekitten.com/600/400?v=5"
                alt="card image"
            />
            <!-- @endif -->
            <div class="card-body">
                <p class="title">{{ $card.title }}</p>
                <p class="content">{{ card.content }}</p>
                <!-- @if(isset($card['cta'])) -->
                <a
                    v-if="card.cta"
                    target="_blank"
                    class="button"
                    href="{{ card.cta.url }}"
                    rel="noopener noreferrer"
                    >{{ card.cta.label }}
                </a>
                <!-- @endif -->
            </div>
        </div>
        <!-- @endforeach -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            cards: [],
        };
    },
    methods: {
        getCards() {
            axios.get("/").then((response) => {
                this.cards = response.data;
            });
        },
    },
    mounted() {
        this.getCards();
    },
};
</script>
