// eslint-disable-next-line /* eslint-disable */
<template>
<div class="container">
    <h2>Books Registation</h2>
    <form @submit.prevent="save">
        <!-- <div class="form-group">
            <label>Book ID</label>
            <input type="text" v-model="books.id" class="form-control" placeholder="Book ID" />
        </div> -->

        <div class="form-group">
            <label>Book Title</label>
            <input type="text" v-model="books.title" class="form-control" placeholder="Book Title" />
        </div>

        <div class="form-group">
            <label>Author Name</label>
            <input type="text" v-model="books.author" class="form-control" placeholder="Author Name" />
        </div>

        <div class="form-group">
            <label>Genere</label>
            <input type="text" v-model="books.genre" class="form-control" placeholder="Genere" />
        </div>

        <div class="form-group">
            <label>Description</label>
            <input type="text" v-model="books.description" class="form-control" placeholder="Description" />
        </div>

        <div class="form-group">
            <label>Isbn</label>
            <input type="text" v-model="books.isbn" class="form-control" placeholder="Isbn" />
        </div>

        <div class="form-group">
            <label>Image</label>
            <input type="text" v-model="books.image" class="form-control" placeholder="Image" />
        </div>

        <div class="form-group">
            <label>Published On</label>
            <input type="text" v-model="books.published" class="form-control" placeholder="Published On" />
        </div>

        <div class="form-group">
            <label>Publisher Name</label>
            <input type="text" v-model="books.publisher" class="form-control" placeholder="Publisher Name" />
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
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
                <th scope="col"></th>
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
                <td>
                    <button type="button" class="btn btn-warning" @click="edit(books)">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger" @click="remove(books)">
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</template>

<script>
import axios from 'axios'
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
    console.log('mounted() called.......')
  },

  methods: {
    StudentLoad () {
      var page = 'http://127.0.0.1:80/api/books'
      axios.get(page)
        .then(
          ({
            data
          }) => {
            console.log(data)
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
      axios.post('http://127.0.0.1:80/api/books', this.books)
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
      var editrecords = `http://127.0.0.1:80/api/books/${this.books.id}`
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
      var url = `http://127.0.0.1:80/api/books/${books.id}`
      // var url = 'http://127.0.0.1:80/api/books/'+ books.id;
      axios.delete(url)
      alert(`Book ID ${books.id} Is Deleted`)
      this.StudentLoad()
    }
  }
}
</script>
