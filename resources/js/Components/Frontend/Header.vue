<script setup>
import { ref, onMounted } from "vue";
const showMobileMenu = ref("false");
const scrollBg = ref(false);
import { useDark, useToggle } from "@vueuse/core";


const isDark = useDark();
const toggleDark = useToggle(isDark);
const navigations = [
  { name: "Home", href: "#home" },
  { name: "About", href: "#about" },
  { name: "Portfolio", href: "#portfolio" },
  { name: "Services", href: "#services" },
  { name: "Contact", href: "#contact" },
  { name: "Dashboard", href: route('dashboard') },
];
const setScrollBg = (value) => {
  scrollBg.value = value;
};

onMounted(() => {
  window.addEventListener("scroll", () => {
    return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
  });
});
</script>
<template>
  <nav
    class="w-full fixed z-20 border-gray-200 px-2 sm:px-4 py-2.5 rounded"
    :class="{
      'bg-brown dark:bg-dark-primary': scrollBg,
      'bg-transperent dark:bg-slate-800': !scrollBg,
    }"
  >
    <div
      class="container flex flex-wrap justify-between items-center mx-auto"
      bis_skin_checked="1"
    >
      <a class="flex items-center">
        <span
          class="
            self-center
            text-xl
            font-semibold
            whitespace-nowrap
            text-black
            dark:text-white
          "
          >Portflio</span
        >
      </a>
      <button
        @click="showMobileMenu = !showMobileMenu"
        data-collapse-toggle="navbar-default"
        type="button"
        class="
          inline-flex
          items-center
          p-2
          ml-3
          text-sm text-gray-500
          rounded-lg
          md:hidden
          hover:bg-gray-100
          focus:outline-none focus:ring-2 focus:ring-gray-200
          dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600
        "
        aria-controls="navbar-default"
        aria-expanded="false"
      >
        <span class="sr-only">Open main menu</span>
        <svg
          class="w-6 h-6"
          aria-hidden="true"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
            clip-rule="evenodd"
          ></path>
        </svg>
      </button>
      <div
        class="w-full md:block md:w-auto"
        :class="{ hidden: showMobileMenu }"
        id="navbar-default"
        bis_skin_checked="1"
      >
        <ul
          class="
            flex flex-col
            p-4
            mt-4
            rounded-lg
            border border-light-tail-500
            dark:border-dark-navy-100
            md:flex-row md:space-x-8 md:mt-0 md:font-medium md:border-0
          "
        >
          <li v-for="(navigation, index) in navigations" :key="index">
            <a
              :href="navigation.href"
              class="
                block
                py-2
                pr-4
                pl-3
                text-light-tail-500
                rounded
                dark:text-dark-navy-100
                hover:text-light-tail-100
                dark:hover:text-white
              "
              aria-current="page"
              >{{ navigation.name }}</a
            >
          </li>

        <svg @click="toggleDark()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor" height="35" width="48">
        <path d="M9.5,2c-1.82,0-3.53,0.5-5,1.35c2.99,1.73,5,4.95,5,8.65s-2.01,6.92-5,8.65C5.97,21.5,7.68,22,9.5,22c5.52,0,10-4.48,10-10 S15.02,2,9.5,2z"
         id="mainIconPathAttribute" fill="#000000" stroke-width="0.6" stroke="#002aff" filter="url(#shadow)"></path><filter id="shadow"><feDropShadow id="shadowValue"
          stdDeviation="0.5" dx="1.1" dy="1.2" flood-color="black"></feDropShadow></filter></svg>
        </ul>
      </div>
    </div>
  </nav>
</template>
