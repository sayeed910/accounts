function objectExtend(obj, props) {
    
    Object.keys(props).forEach(function(element) {
        obj[element] = props[element];

    });

};

var Product = function(name, id, brand, salePrice, costPrice, remark) {

    var obj = {
        "name": name,
        "id": id,
        "brand": brand,
        "salePrice": salePrice,
        "costPrice": costPrice,
        "remark": remark

    };

   objectExtend(obj, Product.methodList);

    return obj;
};


Product.methodList = {

    getName: function() { return this.name; },
    getId: function() { return this.id; },
    getBrand: function() { return this.brand; },
    getSalePrice: function() { return this.salePrice; },
    getCostPrice: function() { return this.costPrice; },
    getRemark: function() { return this.remark; },

    setName: function(_name) {
        this.name = _name;
    },
    setId: function(id) {
        this.id = id;
    },
    setBrand: function(brand) {
        this.brand = brand;
    },
    setSalePrice: function(salePrice) {
        this.salePrice = salePrice;
    },
    setCostPrice: function(costPrice) {
        this.costPrice = costPrice;
    },
    setRemark: function(remark) {
        this.remark = remark;
    }


};


var Employee = function(name, id, nid, salary, post, remark) {

    var obj = {
        "name": name,
        "id": id,
        "nid": nid,
        "salary": salary,
        "post": post,
        "remark": remark

    };

   objectExtend(obj, Employee.methodList);

    return obj;
};


Employee.methodList = {

    getName: function() { return this.name; },
    getId: function() { return this.id; },
    getNid: function() { return this.nid; },
    getSalary: function() { return this.salary; },
    getPost: function() { return this.post; },
    getRemark: function() { return this.remark; },

    setName: function(_name) {
        this.name = _name;
    },
    setId: function(id) {
        this.id = id;
    },
    setNid: function(nid) {
        this.nid = nid;
    },
    setSalary: function(salary) {
        this.salary = salary;
    },
    setPost: function(post) {
        this.post = post;
    },
    setRemark: function(remark) {
        this.remark = remark;
    }


};

var Company = function(name, id, address,contactNo, country, region, remark) {

    var obj = {
        "name": name,
        "id": id,
        "contactNo": contactNo,
        "address": address,
        "country": country,
        "region": region,
        "remark": remark

    };

   objectExtend(obj, Company.methodList);

    return obj;
};


Company.methodList = {

    getName: function() { return this.name; },
    getId: function() { return this.id; },
    getContactNo: function() { return this.contactNo; },
    getCountry: function() { return this.country; },
    getRegion: function() { return this.region; },
    getAddress: function() { return this.address; },
    getRemark: function() { return this.remark; },

    setName: function(_name) {
        this.name = _name;
    },
    setId: function(id) {
        this.id = id;
    },
    setContactNo: function(contactNo) {
        this.contactNo = contactNo;
    },
    setCountry: function(country) {
        this.country = country;
    },
    setRegion: function(region) {
        this.region = region;
    },
    setAddress: function(address) {
        this.address = address;
    },
    setRemark: function(remark) {
        this.remark = remark;
    }


};

console.log("library loaded");