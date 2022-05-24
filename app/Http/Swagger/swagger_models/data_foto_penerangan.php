<?php

/**
  * @OA\Get(
  *      path="/v1/entities/data-foto-penerangan",
  *      operationId="browseD.IN.8-DataFotoDokumentasiKegiatanPeneranganHukum",
  *      tags={"data-foto-penerangan"},
  *      summary="Browse D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      description="Returns list of D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
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
  *      path="/v1/entities/data-foto-penerangan/read?slug=data-foto-penerangan&id={id}",
  *      operationId="readD.IN.8-DataFotoDokumentasiKegiatanPeneranganHukum",
  *      tags={"data-foto-penerangan"},
  *      summary="Get D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum based on id",
  *      description="Returns D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum based on id",
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
  *      path="/v1/entities/data-foto-penerangan/add",
  *      operationId="addD.IN.8-DataFotoDokumentasiKegiatanPeneranganHukum",
  *      tags={"data-foto-penerangan"},
  *      summary="Insert new D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      description="Insert new D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"triwulan":"Abc", "foto":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/data-foto-penerangan/edit",
  *      operationId="editD.IN.8-DataFotoDokumentasiKegiatanPeneranganHukum",
  *      tags={"data-foto-penerangan"},
  *      summary="Edit an existing D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      description="Edit an existing D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"triwulan":"Abc", "foto":"Abc", "keterangan":"Abc"},
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
  *      path="/v1/entities/data-foto-penerangan/delete",
  *      operationId="deleteD.IN.8-DataFotoDokumentasiKegiatanPeneranganHukum",
  *      tags={"data-foto-penerangan"},
  *      summary="Delete one record of D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      description="Delete one record of D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-foto-penerangan",
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
  *      path="/v1/entities/data-foto-penerangan/delete-multiple",
  *      operationId="deleteMultipleD.IN.8-DataFotoDokumentasiKegiatanPeneranganHukum",
  *      tags={"data-foto-penerangan"},
  *      summary="Delete multiple record of D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      description="Delete multiple record of D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-foto-penerangan",
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
  *      path="/v1/entities/data-foto-penerangan/sort",
  *      operationId="sortD.IN.8-DataFotoDokumentasiKegiatanPeneranganHukum",
  *      tags={"data-foto-penerangan"},
  *      summary="Sort existing D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      description="Sort existing D.IN.8 - Data Foto Dokumentasi Kegiatan Penerangan Hukum",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="data-foto-penerangan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "triwulan":"Abc", "foto":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "triwulan":"Abc", "foto":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="triwulan"), 
  *                         @OA\Property(type="string", property="foto"), 
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