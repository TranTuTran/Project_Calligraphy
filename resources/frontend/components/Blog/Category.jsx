import React from 'react';
import BreadCrumb from './Partials/Breadcrumb';
import Header from '../Commons/Header';
import Footer from '../Commons/Footer';
import Content from './Partials/Content';

export default function Category(props) {
  return (
    <>
      <Header />

      <BreadCrumb />
      <Content />

      <Footer />
    </>
  )
}