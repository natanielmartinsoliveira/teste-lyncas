import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup } from '@angular/forms';
import { BooksService } from '../../services/books.service';

@Component({
  selector: 'app-books',
  templateUrl: './books.component.html',
  styleUrls: ['./books.component.scss']
})
export class BooksComponent implements OnInit {
  books:any;
  data:any;
  form:any={name:''};
  constructor(private bookService: BooksService) { 

  }

  ngOnInit(): void {
  }

  onSubmit(name:any) {

    // Process checkout data here
    this.bookService.getBooks(name).subscribe((books: any[]) => {
      this.data = books;
      this.books = this.data.books.items;
      console.log(this.data);
    });
  }

}
