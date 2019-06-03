import React, { Component } from "react";

import NotebookHeader from './components/notebook-header';
import NotebookFooter from './components/notebook-footer';
import LeftBlock from "./components/LeftBlock";

export default class Notebook extends Component {
  render() {
    return (
      <div className="Notebook">
        <NotebookHeader />
        <LeftBlock />
        <NotebookFooter />
      </div>
    );
  }
}
