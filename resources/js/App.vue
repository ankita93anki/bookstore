// eslint-disable-next-line /* eslint-disable */
<template>
<div class="container">
    <h2>Awesome Bookstore</h2>
    <div class="flex items-center justify-between">
        <form class="py-3 px-4 flex items-center">
            <label class="sr-only">Search</label>
            <div class="relative w-full">
                <input type="text" v-on:keyup="search" placeholder="Search" class="bg-grey-50 vorder border-grey-300 text-grey-900">
            </div>
        </form>
    </div>
    <h2>Avilable Books</h2>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Book Title</th>
                <th scope="col">Auther Name</th>
                <th scope="col">Genere</th>
                <th scope="col">Description</th>
                <th scope="col">Isbn</th>
                <th scope="col">Image</th>
                <th scope="col">Published On</th>
                <th scope="col">Publisher Name</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="books in result" v-bind:key="books.id">
                <td>{{ books.id }}</td>
                <td>{{ books.title }}</td>
                <td>{{ books.author }}</td>
                <td>{{ books.genre }}</td>
                <td>{{ books.description }}</td>
                <td>{{ books.isbn }}</td>
                <td>{{ books.image }}</td>
                <td>{{ books.published }}</td>
                <td>{{ books.publisher }}</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- <Bootstrap5Pagination :data="books.data" @pagination-change-page="StudentLoad" /> -->
</template>

<script>
import axios from 'axios'
import 'bootstrap/dist/css/bootstrap.min.css'
// import { Bootstrap5Pagination } from 'laravel-vue-pagination'
export default {
  name: 'BookstoreAdmin',
  data () {
    return {
      result: {},
      books: {
        id: '',
        title: '',
        author: '',
        genre: '',
        description: '',
        isbn: '',
        image: '',
        published: '',
        publisher: ''
      }
    }
  },
  created () {
    this.StudentLoad()
  },
  mounted () {
    // this.StudentLoad()
    console.log('mounted() called.......')
  },

  methods: {
    search (e){
        var pages = `http://127.0.0.1:80/api/customer-books/${e.target.value}`
        axios.get(pages)
            .then(
            ({
                data
            }) => {
                // console.log(data.data)
                this.result = data
            }
        )
    },
    StudentLoad () {
      var pages = `http://127.0.0.1:80/api/customer-books`
      axios.get(pages)
        .then(
          ({
            data
          }) => {
            // console.log(data.data)
            this.result = data
          }
        )
    },

    save () {
      if (this.books.id === '') {
        this.saveData()
      } else {
        this.updateData()
      }
    },
    saveData () {
      axios.post('http://127.0.0.1:80/api/customer-books', this.books)
        .then(
          ({
            data
          }) => {
            alert('Book Added SuccessFully')
            this.StudentLoad()
            this.books.title = ''
            this.books.author = ''
            this.books.genre = ''
            this.books.description = ''
            this.books.isbn = ''
            this.books.image = ''
            this.books.published = ''
            this.books.publisher = ''
            this.id = ''
          }
        )
    },
    edit (books) {
      alert(`Above Form Is Now Pre Filled With Details Of Book ID ${books.id}. You Can Now Update It.`)
      this.books = books
    },
    updateData () {
      var editrecords = `http://127.0.0.1:80/api/customer-books/${this.books.id}`
      axios.put(editrecords, this.books)
        .then(
          ({
            data
          }) => {
            this.books.title = ''
            this.books.author = ''
            this.books.genre = ''
            this.books.description = ''
            this.books.isbn = ''
            this.books.image = ''
            this.books.published = ''
            this.books.publisher = ''
            this.id = ''
            alert(`Book ID ${this.books.id} Is Updated SuccessFully !!!`)
            this.StudentLoad()
          }
        )
    },
    remove (books) {
      var url = `http://127.0.0.1:80/api/customer-books/${books.id}`
      // var url = 'http://127.0.0.1:80/api/customer-books/'+ books.id;
      axios.delete(url)
      alert(`Book ID ${books.id} Is Deleted`)
      this.StudentLoad()
    }
  }
}
</script>
