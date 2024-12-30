import React from 'react';
import Header from "../commons/Header";
import Footer from '../Commons/Footer';
import Section1 from './Partials/Section1';
import Section2 from './Partials/Section2';
import Section3 from './Partials/Section3';
import Section4 from './Partials/Section4';
import Section5 from './Partials/Section5';
import Section6 from './Partials/Section6';

export default function Home(options) {
  return (
    <>
      <Header />

      <Section1 />
      <Section2 />
      <Section3 />
      <Section4 />
      <Section5 />
      <Section6 />

      <Footer />
    </>
  )
}
