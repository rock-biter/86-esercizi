console.log('js modules')

import Food from './jsm/Food.js'
import Person, { People } from './jsm/Person.js'

const io = new Person('Gian', 'gian@gimeil.com', 32)
io.sayHello()

const panino = new Food('Big mac')

io.eat(panino)
