
<div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        CT
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
        Creative Tim
    </a>
</div>
<div class="sidebar-wrapper">
    <div class="table-responsive" v-if="billItems.length">
        <table class="table table-shopping">
            <thead>
            <tr>
                <th>Product</th>
                <th class="text-right">Price</th>
                <th class="text-right">Qty</th>
                <th class="text-right">Amount</th>
                <th></th>
            </tr>
            </thead>
            <tbody >
            <tr v-for="element in billItems">
                <td><small><b>@{{ element.name }}</b></small></td>
                <td>₹@{{ element.price }}</td>
                <td>@{{ element.quantity }}
                    <div class="btn-group">
                         <button class="btn btn-round btn-info btn-sm" @click="reduceQuantity(element.id)"> <i class="material-icons">remove</i> </button>
                         <button class="btn btn-round btn-info btn-sm" @click="increaseQuantity(element.id)"> <i class="material-icons">add</i> </button>
                    </div>
                </td>
                <td>₹@{{ element.amount }}</td>
                <td class="td-actions">
                    <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-simple" @click="removeItem(element.id, element.name)">
                    <i class="material-icons">close</i></button>
                </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary" @click="submitBill()" style="float: right;" :disabled=isSubmitDisabled>Submit</button>
    </div>
</div>

