import React from 'react';
import BreadCrumb from './Partials/Breadcrumb';
import Header from '../Commons/Header';
import Footer from '../Commons/Footer';
import ContentLesson from './Partials/ContentLesson';

export default function Lesson(props) {
  return (
    <>
      <Header />

      <BreadCrumb />
      <ContentLesson />

      <Footer />
    </>
  )
}