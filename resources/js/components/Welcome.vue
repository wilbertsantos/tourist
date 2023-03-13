
<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Welcome to Tourist Spots in Japan</h1>
            </div>
        </div>

        <div class="row" v-if="cities">
            <div class="col-md-6" v-for="(city, index) in cities.data" :key="index">
                <div class="card mb-4">
                    <img class="card-img-top" :src="city.image" alt="Card image cap">
                    <div class="card-body">
                        <div>

                            <h5 class="card-title">{{ city.name }}</h5>

                            <p>{{ city.name }}</p>
                        </div>
                        <div>
                            <p>{{ city.description }} Places</p>
                        </div>
                        <router-link :to="{ path: '/city', query: { city: city.name } }" class="btn btn-primary">Learn
                            Mores</router-link>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template >

<script setup>
import { ref, reactive } from 'vue';
import axios from 'axios';
import { useRoute } from 'vue-router';


const city = ref('');
const weather = ref('');
const places = ref('');
const cities = reactive({
    data: [
        {
            name: "Tokyo",
            image: "https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80&compress=true&cs=tinysrgb&dpr=2",
            description:
                "Welcome to Tokyo, a city that never sleeps! From the bustling streets of Shibuya to the serene gardens of the Imperial Palace, Tokyo has something for everyone. Discover the futuristic side of the city with a visit to Odaiba or the Tokyo Skytree, or immerse yourself in its traditional culture with a trip to Asakusa or the Meiji Shrine. Don't forget to indulge in the city's incredible food scene, whether it's at a Michelin-starred sushi restaurant or a tiny ramen shop tucked away in a back alley."
        },
        {
            name: "Yokohama",
            image: "https://images.unsplash.com/photo-1515715686304-8c865225ee3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80&compress=true&cs=tinysrgb&dpr=2",
            description:
                "Just a short train ride from Tokyo lies Yokohama, a city that combines old-world charm with modern amenities. Take a stroll through the historic port district of Minato Mirai or enjoy the scenic views from the Landmark Tower. For a taste of the city's cultural heritage, head to the Sankeien Garden or the Yokohama Museum of Art. And don't forget to try the local specialty, shumai dumplings, at the bustling Yokohama Chinatown."
        },
        {
            name: "Kyoto",
            image: "https://images.unsplash.com/photo-1578469645742-46cae010e5d4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80&compress=true&cs=tinysrgb&dpr=2",
            description:
                "Step back in time with a visit to Kyoto, Japan's ancient capital. With over 2,000 temples and shrines, Kyoto is a treasure trove of history and tradition. Marvel at the stunning golden pavilion of Kinkakuji, explore the winding streets of Gion, or experience a traditional tea ceremony at a Zen temple. And for a taste of Kyoto's culinary delights, try the city's famous kaiseki cuisine, a multi-course meal that showcases the best of local ingredients."
        },
        {
            name: "Osaka",
            image: "https://images.unsplash.com/photo-1589452271712-64b8a66c7b71?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80&compress=true&cs=tinysrgb&dpr=2",
            description:
                "Known as the 'kitchen of Japan', Osaka is a food lover's paradise. From street food stalls to high-end restaurants, Osaka offers a dizzying array of culinary delights. But there's more to the city than just food - Osaka is also home to a vibrant nightlife scene and some of Japan's most iconic landmarks, including Osaka Castle and the Umeda Sky Building. And for a unique cultural experience, try your hand at taiko drumming or watch a kabuki performance at the National Bunraku Theatre."
        },
        {
            name: "Sapporo",
            image: "https://images.unsplash.com/photo-1514186077719-5f31a164c12e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80&compress=true&cs=tinysrgb&dpr=2",
            description:
                " Located on the northern island of Hokkaido, Sapporo is a city that's famous for its winter festivals and outdoor activities. Visit in February for the world-famous Snow Festival, where giant ice sculptures fill the streets, or hit the ski slopes in nearby Niseko. In the summer, Sapporo is a popular destination for hiking, cycling, and enjoying the local seafood. And of course, no visit to Sapporo is complete without trying the city's signature dish, miso ramen."
        },
        {

            name: "Nagoya",
            image: "https://images.unsplash.com/photo-1625102842181-d7690b11e482?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1631&q=80&compress=true&cs=tinysrgb&dpr=2",
            description:
                "Nestled in the heart of Japan's industrial heartland, Nagoya is a city that's full of surprises. Explore the towering Nagoya Castle or the sprawling Osu Kannon temple, or take a stroll through the atmospheric streets of the Sakae district. And for a taste of Nagoya's unique cuisine, try hitsumabushi, a dish of grilled eel served with rice and a special broth. With its blend of traditional and modern attractions, Nagoya is a city that's sure to captivate you."
        },
    ]
})

const route = useRoute();

</script>
