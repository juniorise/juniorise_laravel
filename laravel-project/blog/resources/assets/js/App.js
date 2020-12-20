import React from 'react';
import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';

import { Route,Switch } from 'react-router-dom';

import { BreakpointProvider,setDefaultBreakpoints } from 'react-socks';

import Question from './pages/question/question.component';
import Answer from './pages/answer/answer.component';
import RecentShare from './pages/recent-share/recent-share.component';
import Header from './components/header/header.component';
import Footer from './components/footer/footer.component';

setDefaultBreakpoints([
  { xs: 0 },
  { s: 576 },
  { m: 768 },
  { l: 992 },
  { xl: 1200 }
]);

const App = () => (
  <div>
    <BreakpointProvider>
      <Header/>
      <Switch>
        <Route exact path='/recentShare' component={RecentShare}/>
        <Route exact path='/question' component={Question}/>
        <Route exact path='/answer' render={() => <Answer commentAmount={3}/>}/>
      </Switch>
      <Footer/>
    </BreakpointProvider>
  </div>
);

export default App;
