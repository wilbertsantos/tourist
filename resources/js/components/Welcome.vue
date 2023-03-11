<template>
    <div>
        <h1>Welcome to the Tourist App</h1>
        <form @submit.prevent="getInfo">
        <label for="city">Select a city:</label>
        <select v-model="city">
            <option value="Tokyo">Tokyo</option>
            <option value="Yokohama">Yokohama</option>
            <option value="Kyoto">Kyoto</option>
            <option value="Osaka">Osaka</option>
            <option value="Sapporo">Sapporo</option>
            <option value="Nagoya">Nagoya</option>
        </select>
        <button type="submit">Get Information</button>
    </form>
    <div v-if="weather">
        <h2>{{ city }} Weather</h2>
        <p>{{ weather }}</p>
    </div>
    <div v-if="places">
        <h2>{{ city }} Places</h2>
        <ul>
            <li v-for="place in places" :key="place.id">{{ place.name }}</li>
    </ul>
</div>
  </div >
</template >

    <script setup>
        import {ref} from 'vue';
        import axios from 'axios';

        const city = ref('');
        const weather = ref('');
        const places = ref('');

const getInfo = () => {
            axios.get(`/api/weather/${city.value}`).then(response => {
                weather.value = response.data;
            });
        axios.get(`/api/places/${city.value}`).then(response => {
            places.value = response.data.response.venues;
  });
};
    </script>
