<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-produk-intelijen",
  *      operationId="browseR.IN.5-RegisterProdukIntelijen",
  *      tags={"register-produk-intelijen"},
  *      summary="Browse R.IN.5 - Register Produk Intelijen",
  *      description="Returns list of R.IN.5 - Register Produk Intelijen",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/register-produk-intelijen/read?slug=register-produk-intelijen&id={id}",
  *      operationId="readR.IN.5-RegisterProdukIntelijen",
  *      tags={"register-produk-intelijen"},
  *      summary="Get R.IN.5 - Register Produk Intelijen based on id",
  *      description="Returns R.IN.5 - Register Produk Intelijen based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/register-produk-intelijen/add",
  *      operationId="addR.IN.5-RegisterProdukIntelijen",
  *      tags={"register-produk-intelijen"},
  *      summary="Insert new R.IN.5 - Register Produk Intelijen",
  *      description="Insert new R.IN.5 - Register Produk Intelijen into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"jenis produk":"Abc", "nomor surat":"Abc", "tanggal surat":"Abc", "subdit":"Abc", "perihal":"Abc", "disposisi":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-produk-intelijen/edit",
  *      operationId="editR.IN.5-RegisterProdukIntelijen",
  *      tags={"register-produk-intelijen"},
  *      summary="Edit an existing R.IN.5 - Register Produk Intelijen",
  *      description="Edit an existing R.IN.5 - Register Produk Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"jenis produk":"Abc", "nomor surat":"Abc", "tanggal surat":"Abc", "subdit":"Abc", "perihal":"Abc", "disposisi":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-produk-intelijen/delete",
  *      operationId="deleteR.IN.5-RegisterProdukIntelijen",
  *      tags={"register-produk-intelijen"},
  *      summary="Delete one record of R.IN.5 - Register Produk Intelijen",
  *      description="Delete one record of R.IN.5 - Register Produk Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-produk-intelijen",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-produk-intelijen/delete-multiple",
  *      operationId="deleteMultipleR.IN.5-RegisterProdukIntelijen",
  *      tags={"register-produk-intelijen"},
  *      summary="Delete multiple record of R.IN.5 - Register Produk Intelijen",
  *      description="Delete multiple record of R.IN.5 - Register Produk Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-produk-intelijen",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-produk-intelijen/sort",
  *      operationId="sortR.IN.5-RegisterProdukIntelijen",
  *      tags={"register-produk-intelijen"},
  *      summary="Sort existing R.IN.5 - Register Produk Intelijen",
  *      description="Sort existing R.IN.5 - Register Produk Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-produk-intelijen",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "jenis produk":"Abc", "nomor surat":"Abc", "tanggal surat":"Abc", "subdit":"Abc", "perihal":"Abc", "disposisi":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "jenis produk":"Abc", "nomor surat":"Abc", "tanggal surat":"Abc", "subdit":"Abc", "perihal":"Abc", "disposisi":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="jenis produk"), 
  *                         @OA\Property(type="string", property="nomor surat"), 
  *                         @OA\Property(type="string", property="tanggal surat"), 
  *                         @OA\Property(type="string", property="subdit"), 
  *                         @OA\Property(type="string", property="perihal"), 
  *                         @OA\Property(type="string", property="disposisi"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */