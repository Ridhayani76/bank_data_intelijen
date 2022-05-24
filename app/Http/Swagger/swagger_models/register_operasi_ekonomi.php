<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-operasi-ekonomi",
  *      operationId="browseR.IN.14-RegisterOperasiEkonomidanKeuangan",
  *      tags={"register-operasi-ekonomi"},
  *      summary="Browse R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      description="Returns list of R.IN.14 - Register Operasi Ekonomi dan Keuangan",
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
  *      path="/v1/entities/register-operasi-ekonomi/read?slug=register-operasi-ekonomi&id={id}",
  *      operationId="readR.IN.14-RegisterOperasiEkonomidanKeuangan",
  *      tags={"register-operasi-ekonomi"},
  *      summary="Get R.IN.14 - Register Operasi Ekonomi dan Keuangan based on id",
  *      description="Returns R.IN.14 - Register Operasi Ekonomi dan Keuangan based on id",
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
  *      path="/v1/entities/register-operasi-ekonomi/add",
  *      operationId="addR.IN.14-RegisterOperasiEkonomidanKeuangan",
  *      tags={"register-operasi-ekonomi"},
  *      summary="Insert new R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      description="Insert new R.IN.14 - Register Operasi Ekonomi dan Keuangan into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-operasi-ekonomi/edit",
  *      operationId="editR.IN.14-RegisterOperasiEkonomidanKeuangan",
  *      tags={"register-operasi-ekonomi"},
  *      summary="Edit an existing R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      description="Edit an existing R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/register-operasi-ekonomi/delete",
  *      operationId="deleteR.IN.14-RegisterOperasiEkonomidanKeuangan",
  *      tags={"register-operasi-ekonomi"},
  *      summary="Delete one record of R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      description="Delete one record of R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-operasi-ekonomi",
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
  *      path="/v1/entities/register-operasi-ekonomi/delete-multiple",
  *      operationId="deleteMultipleR.IN.14-RegisterOperasiEkonomidanKeuangan",
  *      tags={"register-operasi-ekonomi"},
  *      summary="Delete multiple record of R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      description="Delete multiple record of R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-operasi-ekonomi",
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
  *      path="/v1/entities/register-operasi-ekonomi/sort",
  *      operationId="sortR.IN.14-RegisterOperasiEkonomidanKeuangan",
  *      tags={"register-operasi-ekonomi"},
  *      summary="Sort existing R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      description="Sort existing R.IN.14 - Register Operasi Ekonomi dan Keuangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-operasi-ekonomi",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "sektor":"Abc", "nomor":"Abc", "tanggal":"Abc", "disposisi":"Abc", "nama petugas":"Abc", "hasil":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="sektor"), 
  *                         @OA\Property(type="string", property="nomor"), 
  *                         @OA\Property(type="string", property="tanggal"), 
  *                         @OA\Property(type="string", property="disposisi"), 
  *                         @OA\Property(type="string", property="nama petugas"), 
  *                         @OA\Property(type="string", property="hasil"), 
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