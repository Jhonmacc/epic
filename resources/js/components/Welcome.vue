<template>
  <div class="card mt-4">
    <img class="card-img-top">
    <div class="card-body">
      <h4 class="card-title">{{ title }}</h4>
      <p class="card-text">{{ version }}</p>
    </div>
  </div>
  </template>
  
  <script>
  export default {
    setup() {
      return {
        title: 'Olá, seja bem vindo!',
        version: '1.0.0' // Aqui estou definindo uma versão fixa como exemplo.
      };
    }
  }
  </script>
  