import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'


const Hello = (props) => {

 // console.log(props)
  return (
    <div>
      <p>

        Hello {props.name}, you are {props.age} years old
      </p>
    </div>
  )
}

const Footer = () => {
  return (
    <div>
      greeting app created by <a href='https://github.com/mluukkai'>mluukkai</a>
    </div>
  )
}
const Header = (props) => {
 // console.log(props)
  return (
    <div> {props.course} </div>
  )
}
const Content = (props) => {
  console.log(props)
  return (
//******************************* */ PARTE 1.1 *****************************
/*<div>
    <p>{props.part1} num: {props.exercises1} </p>
    <p>{props.part2} num: {props.exercises2} </p>
    <p>{props.part3} num: {props.exercises3} </p>
    </div>
*/
    <div>
      <Part part={props.part1} exercises={props.exercises1} />
      <Part part={props.part2} exercises={props.exercises2} />
      <Part part={props.part3} exercises={props.exercises3} />
    </div>
    )

}
const Part = (props) => {
  return (
    <div>
      <p> {props.part} num: {props.exercises} </p>
    </div>
  )
}
const Total = (props) => {
 // console.log(props)
  return (
    <div>
      <p>En total hay {props.total} </p>
    </div>
  )
}
//********************APP 1.1-1.2 *****************************
/*
const App = () => {
  const course = 'Half Stack application development'
  const part1 = 'Fundamentals of React'
  const exercises1 = 10
  const part2 = 'Using props to pass data'
  const exercises2 = 7
  const part3 = 'State of a component'
  const exercises3 = 14

  return (
    <div>
      <Header course={course} />
      <Content part1={part1} part2={part2} exercises1={exercises1} exercises2={exercises2} part3={part3} exercises3={exercises3} />
      <Total total={exercises1+exercises2+exercises3} />
    </div>
  )
}*/
// *************** EJERCICIO 1.3 ******************************
/*const App = () => {
  const course = 'Half Stack application development'
  const part1 = {
    name: 'Fundamentals of React',
    exercises: 10
  }
  const part2 = {
    name: 'Using props to pass data',
    exercises: 7
  }
  const part3 = {
    name: 'State of a component',
    exercises: 14
  }

  return (
     <div>
      <Header course={course} />
      <Content part1={part1.name} part2={part2.name} exercises1={part1.exercises} exercises2={part2.exercises} part3={part3.name} exercises3={part3.exercises} />
      <Total total={part1.exercises+part2.exercises+part3.exercises} />
    </div>
  )
}*/
//************************************************ 1.4 ************************************
/*
const App = () => {
  const course = 'Half Stack application development'
  const parts = [
    {
      name: 'Fundamentals of React',
      exercises: 10
    },
    {
      name: 'Using props to pass data',
      exercises: 7
    },
    {
      name: 'State of a component',
      exercises: 14
    }
  ]

  return (
    <div>
      <div>
      <Header course={course} />
      <Content part1={parts[0].name} part2={parts[1].name} exercises1={parts[0].exercises} exercises2={parts[1].exercises} part3={parts[2].name} exercises3={parts[2].exercises} />
      <Total total={parts[0].exercises+parts[1].exercises+parts[2].exercises} />
    </div>
    </div>
  )
}
*/
/*    ---------------------------------------- 1.5 --------------------------------------
const App = () => {
  const course = {
    name: 'Half Stack application development',
    parts: [
      {
        name: 'Fundamentals of React',
        exercises: 10
      },
      {
        name: 'Using props to pass data',
        exercises: 7
      },
      {
        name: 'State of a component',
        exercises: 14
      }
    ]
  }

  return (
    <div>
      <div>
      <Header course={course.name} />
      <Content part1={course.parts[0].name} part2={course.parts[1].name} exercises1={course.parts[0].exercises} exercises2={course.parts[1].exercises} part3={course.parts[2].name} exercises3={course.parts[2].exercises} />
      <Total total={course.parts[0].exercises+course.parts[1].exercises+course.parts[2].exercises} />
    </div>
    </div>
  )
}*/

/* ---------------------------------------------1.6-1.7----------------------
const App = () => {
  // guarda los clics de cada botón en su propio estado
  const [good, setGood] = useState(0)
  const [neutral, setNeutral] = useState(0)
  const [bad, setBad] = useState(0)

  return (
    <div>
      {good}
     <button onClick={() => setGood(good+1)}>GOOD </button>
     {neutral}
     <button onClick={() => setNeutral(neutral+1)}>neutral </button>
     {bad}
     <button onClick={() => setBad(bad+1)}>Bad </button>
      <h4>Stadistics</h4>
      <p>good {good} </p>
      <p>neutral {neutral} </p>
      <p>bad {bad} </p>
      <p>total {good+neutral+bad} </p>
      <p>positive {good*100/bad} </p>
    </div>
    
  )
}*/
// un lugar adecuado para definir un componente



//------------------------------------------------------1.8-1.9------------------------------------------------
/*
const Statistics = ({ good, neutral, bad }) => {
  const total = good + neutral + bad

  if (total === 0) {
    return <p>No feedback given</p>
  }

  return (
    <div>
      <p>good {good}</p>
      <p>neutral {neutral}</p>
      <p>bad {bad}</p>
      <p>total {total}</p>
      <p>average {(good - bad) / total}</p>
      <p>positive {(good / total) * 100} %</p>
    </div>
  )
}
*/
//-------------------------------------------------------1.10-1.11-------------------------------------------------
/*
const Statistics = ({ good, neutral, bad }) => {
  const total = good + neutral + bad

  if (total === 0) {
    return <p>No feedback given</p>
  }

  const average = (good - bad) / total
  const positive = (good / total) * 100

  return (
    <table>
      <tbody>
        <StatisticLine text="good" value={good} />
        <StatisticLine text="neutral" value={neutral} />
        <StatisticLine text="bad" value={bad} />
        <StatisticLine text="total" value={total} />
        <StatisticLine text="average" value={average} />
        <StatisticLine text="positive" value={`${positive} %`} />
      </tbody>
    </table>
  )
}

const Button = ({ onClick, text }) => (
  <button onClick={onClick}>
    {text}
  </button>
)

const StatisticLine = ({ text, value }) => {
  return (
    <tr>
      <td>{text}</td>
      <td>{value}</td>
    </tr>
  )
}


const App = () => {
  const [good, setGood] = useState(0)
  const [neutral, setNeutral] = useState(0)
  const [bad, setBad] = useState(0)

  return (
    <div>
      <h1>give feedback</h1>

      <Button onClick={() => setGood(good + 1)} text="good" />
      <Button onClick={() => setNeutral(neutral + 1)} text="neutral" />
      <Button onClick={() => setBad(bad + 1)} text="bad" />
      <h1>statistics</h1>
    
      <Statistics
        good={good}
        neutral={neutral}
        bad={bad}
      />
     
    </div>
  )
}

export default App*/
//------------------------------------------------------------1.13-1.14---------------------------------------------------
const App = () => {
  const anecdotes = [
    'If it hurts, do it more often.',
    'Adding manpower to a late software project makes it later!',
    'The first 90 percent of the code accounts for the first 10 percent of the development time...The remaining 10 percent of the code accounts for the other 90 percent of the development time.',
    'Any fool can write code that a computer can understand. Good programmers write code that humans can understand.',
    'Premature optimization is the root of all evil.',
    'Debugging is twice as hard as writing the code in the first place. Therefore, if you write the code as cleverly as possible, you are, by definition, not smart enough to debug it.',
    'Programming without an extremely heavy use of console.log is same as if a doctor would refuse to use x-rays or blood tests when diagnosing patients.',
    'The only way to go fast, is to go well.'
  ]
  const [selected, setSelected] = useState(0)
  const [votes, setVotes] = useState(
    Array(anecdotes.length).fill(0)
  )
  const votarAnecdota = () => {
    const copy = [...votes]
    copy[selected] += 1
    setVotes(copy)
  }
  
  const numRand = () => {
    let rand = Math.floor(Math.random()*anecdotes.length)
    setSelected(rand)
  }
  const maxVotos = Math.max(...votes)
  const top = votes.indexOf(maxVotos)
  return (
    <div>
      <h1>Anecdote del dia</h1>
      <p>{anecdotes[selected]}</p>
      <p>has {votes[selected]} votos</p>

      <button onClick={votarAnecdota}>vote</button>
      <button onClick={numRand}>next anecdote</button>

      <h1>Anecdote Con mas votos</h1>
      <p>{anecdotes[top]}</p>
      <p>Tiene {maxVotos} votos</p>
    </div>
  )
}
export default App 

